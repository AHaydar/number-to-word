# Numbers To Words
This project converts provided numbers to words. The aim is to handle multiple languages. However, we will start with English numbers/words.

This might be helpful for educational purposes or financial services.

Moreover, the main purpose to create the project is to learn the technology stack used in this project (PHP, MYSQL, DOCKER, etc.)

## Setup
1. Install Docker Community Edition
2. Clone the git repository
    `git clone git@github.com:AHaydar/number-to-word.git`
3. Add the server name used in the `site.conf` file to your hosts file (in our case it is `number-to-word.local`):
    
        sudo vi /etc/hosts
    
    _Then add the server name:_
    
        127.0.0.1       localhost number-to-word.local
4. In your terminal, navigate to the project directory
5. Run the following command to start the application
    
        docker-compose up -d
6. In your browser, navigate to http://number-to-word.local:8080/