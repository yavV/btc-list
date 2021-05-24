# base image
FROM node:12.2.0-alpine

# set working directory
WORKDIR /app

# add `/app/node_modules/.bin` to $PATH
ENV PATH /app/node_modules/.bin:$PATH

RUN npm install --global yarn
RUN yarn global add @vue/cli@3.7.0

# start app
#CMD ["npm", "run", "serve"]
CMD ["yarn", "serve"]
#CMD tail -f /dev/null