#!/usr/bin/env nodejs

const WebSocketServer = require('socket.io');
const io = new WebSocketServer({
    origins: process.env.APP_URL + ':443',
});

io.listen(5000);

io.httpServer.on('listening', function() {
    logger.info('Amezmo WebSocket server is listening on %o', io.httpServer.address());
});

io.sockets.on('connection', function (socket) {

    socket.on('disconnect', function(reason) {
        console.log('%s: event disconnect: %s', socket.id, reason);
    });
    socket.on('error', (error) => {
        console.log('%s: error with connection %s', socket.id, error);
        socket.disconnect();
    });

    logger.notice('new connection %s', socket.id);
    
    socket.on('ping', function() {
        socket.emit('ping', 'Hello World');
        console.log('%s: client requested getevents', socket.id);
    });
});
