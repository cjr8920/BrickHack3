'use strict';

const ngrok = require('ngrok');
const Fuse = require('fuse-email');
const port = process.env.PORT || 3000;

ngrok.connect(port, function(err, url) {
 const fuse = Fuse({
   email_key: '074cfb047cdf83b26b508cc4ed8c837ba142961d',
   domain: url,
   name: 'fishy',
   sending_address: 'fishy@nathanpomana.com',
   inbound_address: 'fishy@nathanpomana.com',
   // restrict_inbound: false
 });

 fuse.setupTransport(function() {
   fuse.setupServer(port, function(err, server) {
     fuse.setupEndpoint(server);
   });
 });

 fuse.on('email_received', function(responder, inboundMessage) {
   console.log(inboundMessage.subject);
   responder.reply({
     body: 'Hey! I got your email from an ngrok tunnel. Lit!'
   });
 });
});