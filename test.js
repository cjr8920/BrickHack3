'use strict';

const ngrok = require('ngrok');
const Fuse = require('fuse-email');
const port = process.env.PORT || 3000;
const Lob = require('lob-node')('test_87af502346326d11f66d8792d457c93ce26');

 
 
	 ngrok.connect(port, function(err, url) {
	 const fuse = Fuse({
	   email_key: '074cfb047cdf83b26b508cc4ed8c837ba142961d',
	   domain: url,
	   name: 'fishy',
	   sending_address: 'fishy@nathanpomana.com',
	   inbound_address: 'fishy@nathanpomana.com',
	 });

	 fuse.setupTransport(function() {
	   fuse.setupServer(port, function(err, server) {
		 fuse.setupEndpoint(server);
	   });
	 });
	 

	 fuse.on('email_received', function(responder, inboundMessage) {
	   var text = inboundMessage;
	   var subject = text.subject;
	   var address = ['678 Fake Street', 'Monticello', 'NY', '12701', 'US'];
	   subject = subject.split(",");
	   Lob.letters.create({
		   to: {
			   name: subject[0],
			   address_line1: subject[1],
			   address_city: subject[2],
			   address_state: subject[3],
			   address_zip: subject[4],
			   address_country: subject[5], 
		   },
		   from: {
			   name: subject[6],
			   address_line1: address[0],
			   address_city: address[1],
			   address_state: address[2],
			   address_zip: address[3],
			   address_country: address[4],
		   },
		   file: text.html,
		   color: true
	   }, function (err, letter){
			responder.reply({
				body: letter.url 
			});
		});
	   
	   
	 });
});
