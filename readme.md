## Imo Schools Project

 This is a website that brings private (and few prominent public schools) together in a
 comparative mode such that Parents (or Guidance) can visit the site and select 
  the school most suitable for their kids.

## Benefits  
 This Comparism will push schools to improve on their services, 
  resulting in Quality education in Imo State. The site will also run 
  some free services that will attract students and the citizens to the site. 

## Installation
- Fire up your terminal (or Command Prompt in Windows)
- Download the app from your terminal with the command: `git clone https://github.com/engrChidi/imo-schools-project`.
- Navigate to the project folder with the command: `cd imo-schools-project` within your terminal.
- Set up a database in your local server and give it any name you prefer
- Open the `.env.example` file within the project or create a new `.env` file and copy the content within `.env.example` into it.
- Ensure that you carefully fill the credentials within your newly created `.env` file.
- You can now migrate files into your database with `php artisan migrate`.
- Also to seed data into the database, especially the Roles, run `php artisan db:seed`
- From the terminal while you are still within the project directory, install the dependencies by running the command `npm install`
- You can then run the application with the command `php artisan serve`. This should run the project on `http://localhost:4200`

