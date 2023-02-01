#Installing the Project Locally
1. Open your browser and go to *https://github.com/theodo/ship-shop*
2. Use the template and create a new repository, naming it `thenameofyourrepo`.
3. Clone the repository by running the following command in your terminal:

```gh repo clone <yourname>/<thenameofyourrepo>```

4. Change the current directory to <thenameofyourrepo> by running the following command:

```cd <thenameofyourrepo>```

5. Install the dependencies by running the following command:

```composer install```

6. Start the Docker containers by running the following command:

```docker compose up```
7. Open a new terminal tab and run the following command to install the Sylius platform:
   python

```bin/console sylius:install```
8. Install the yarn dependencies by running the following command:

```yarn install```
9. Build the assets by running the following command:

```yarn build```
10. Start the Symfony server by running the following command:
    ```symfony server:start```

11. Finally, open your browser and go to *https://127.0.0.1:8000* to access the project.
