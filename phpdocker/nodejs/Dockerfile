
# Pull base image.
FROM mhart/alpine-node:latest

# Install Bower & Gulp
RUN npm install -g crossenv
RUN apk upgrade
RUN apk add git

# Define working directory.
WORKDIR /code
