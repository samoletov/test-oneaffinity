# code-test
OneAffiniti code test

## Instructions 

### Design and implement a solution to the following task, with the following requirements in mind:

The solution should be clear, concise, efficient and maintainable.
Do not make use of any libraries that are not part of the standard language libraries.
Do not make use of any pre-existing frameworks, such as CakePHP, etc.
You are of course free to use whatever resources or references that are available to you, but it is expected that the design/solution will be 100% your own.
Your solution should be in the form of a plain-text file or files containing the source code. You should take no more than 24 hours to complete your work. But don't rush it -- no extra marks for getting it done quickly!

### Task

Create a Flickr image gallery, using PHP and HTML. The user should be able to enter a keyword, which is then used to search Flickr. The search results should be paginated and displayed as five results per page, and the user should be able to navigate to other pages. Each image should be displayed as a thumbnail; clicking on the thumbnail should open a new page which shows the full-size image. Keep in mind that your solution should work efficiently, no matter how many images match the keyword.

# Installation

This application build with PHP7.3/composer and Angular8, so this packages should be installed.  

##### Frontend
```
cd frontend/flickr
npm install
ng serve
```
It will run UI on: http://localhost:4200/

To build dist that will be used on production use (will replace backend URL with production domain)
```
ng build --prod 
```

#### Backend 
```
cd backend
composer install
```
It will build and run API on: http://localhost:8321/

# Running

Use docker-compose to run application.
```
docker-compose up
```

# Testing
Only backend tests available

```
cd backend
./vendor/phpunit/phpunit/phpunit tests/
```

Frontend: http://localhost
Backend: http://localhost:8321


# TODO
* Right now UI use hardcoded backend url through Angular environment file. Use .env to set it during deployment
* CORS in backend accept any domain. Use .env to set whitelisted domains during deployment
