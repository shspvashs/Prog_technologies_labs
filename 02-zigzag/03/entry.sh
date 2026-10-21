#!/bin/sh
set -e
if [ ! -d /app/zigzag-webapp ]; then
    git clone https://github.com/michaelkolesidis/zigzag.git /app/zigzag-webapp
fi
cd /app/zigzag-webapp
npm install
exec npm run dev -- --host 0.0.0.0
