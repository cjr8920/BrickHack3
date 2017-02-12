echo off
node test.js
timeout 10
start "" "http://localhost:3000"