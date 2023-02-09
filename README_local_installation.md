# Installing the Project Locally

## Prerequisites

Use this as a template (do not clone directly) and create a new repository in your GitHub account.

Once the repository is created, clone it locally and change directory to the project root.

## First Installation

Install the project by running the following command:
`make first-install`
This will install the required dependencies, start the containers, start a sylius project, populate a database, build the assets and start the Symfony server.

If you want to run the commands manually, you can find them in the `Makefile`.

## After the First Installation

### Start the Project

If you modified the composer.json file, you need to run the following command:
`make install`
This will install the required dependencies.

After the first installation, you can start the project by running the following command:
`make start`
This will start the containers and start the Symfony server.


### Stop the Project

To stop the project, run the following command:
`make stop`

### Committing Changes

If you want to commit changes to the project, you need to make sure the commit message is in the correct format.
The commit message must be in the following format:
`<type>(<scope>): <subject>`
You can see and modify the full list of types and scopes in the `grumphp.yml` file.
