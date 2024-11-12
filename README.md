# Coding challenge

Create a dynamic block for selecting image in a specific size.

With this block, the content editor should be able to select any image from the media library, in whatever size that image is available.

Image must be rendered on server side, with few additional data displayed below:
- the number of .jpg images in media library (excluding trashed images),
- the number of published posts

![Screen recording](./assets/screen-recording.gif)

## Extras

It would be a great plus if you:
- register a new image size,
- extend the list of available image sizes in your block with your new, custom size,

## Technical requirements

1. Code have to meets the quality requirements - no phpcs nor eslint errors
2. No JS errors nor warnings in console, no PHP errors nor warnings
3. Image must be lazy-loaded using native browser functionality
4. It must be a "dynamic block" with HTML markup rendered on server side

## Scripts

- use `npm install && composer install` to install all dependencies
- use `npm run build` to build the JS dist files
- use `npm run lint` to test your code quality against phpcs & eslint standards

## WordPress on your local machine

We use Docker to run WordPress on our local machines. Make sure that you have Docker daemon installed and running, then:

- edit your hosts file to enable `localhost.develop` domain on 127.0.0.1
- use `docker-compose up` to start WordPress
- use `docker-compose kill` to stop WordPress
- access `http://localhost.develop` to use your local WordPress instance

## Let us know

Create a pull request and assign this folks for review: @wodnik-mateusz

Thank you for applying to Ryanair Labs Wrocław - WordPress team!


//////
11.11.2024
login: agnieszka
pass: agnieszka

url: http://localhost.develop/wp-admin/