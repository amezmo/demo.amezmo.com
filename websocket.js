#!/usr/bin/env nodejs


const WebSocketServer = require('socket.io');
const dotenv = require('dotenv');
dotenv.config();

// the hook needs to copy the configuration
const io = new WebSocketServer({
    origins: ['*']
});

io.listen(3000);

io.httpServer.on('listening', function() {
    console.log('Amezmo WebSocket server is listening on %o', io.httpServer.address());
});

io.sockets.on('connection', function (socket) {
    console.log('new connection %s', socket.id);

    socket.on('disconnect', function(reason) {
        console.log('%s: event disconnect: %s', socket.id, reason);
    });
    socket.on('error', (error) => {
        console.log('%s: error with connection %s', socket.id, error);
        socket.disconnect();
    });

    socket.on('ping', function() {
        socket.emit('ping', 'Hello World');
        console.log('%s: client requested getevents', socket.id);
    });
});
