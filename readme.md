# Task description
There are no limitations in terms of framework/libraries usage.
Your app should follow MVC pattern and use OOP.
Try to create your app as project that will expand in future.
Average spent time is **30-50 minutes** using frameworks (tested on Symfony & Laravel). 
However optimal time for finishing the task is up to **2 hours**.


## Domain: 
You have three tables in a relation database. These tables are defined as follows:

### table: user
| column | type |
| --- | --- |
| id | integer PRIMARY |
| name | string(20) UNIQUE |
| created_at | timestamp |
| id_role | integer (foreign key to role.id) NOT NULL |

### table: role
| column | type |
| --- | --- |
| id | integer PRIMARY |
| name | string(5) |

### table: token
| column | type |
| --- | --- |
| id | integer PRIMARY |
| name | string(5) |
| created_at | timestamp |
| id_user | integer (foreign key to user.id) NOT NULL |


## Expectations
Your app should do successfully the following:
1. Have an endpoint at `api/tokens` which will return a JSON reply with all tokens and all their data.
1. Implement provided interfaces in `model` directory.
1. Generate random amount of assigned tokens. Token name must:
    1. be exactly 5 characters long.
    1. have only uppercase characters [A-Z].
    1. If someone changes function that generates name, the app cannot be successfully deployed.
    
    
## Conditions & additional points
Take into account following:

1. Creation of users & roles (if present) should be standalone process.
1. Your code will be launched on following server:
    1. Linux Debian x64
    1. php-fpm 7.2.24
    1. nginx server
    1. Unknown relation database (PostgreSQL, MySQL, MSSQL, MariaDB...)
    1. Your code is deployed with Travis CI
1. Your code will be also sent to your colleagues developers with different versions of PHP and systems (Windows, Mac OS...).
1. Columns like `id`, `name`, `created_at` and `id_users` are going to be used often in future development.

### Bonus additional points:

1. [optional] Describe OR prepare solution for situation, when tables are missing.
1. [optional] Describe OR prepare structure for template and render it using HTML that would have following:
    1. List of all users
    1. Each user have iterable structure of roles
    1. Each user have iterable structure of tokens that are max. 2 days old
1. [optional] Describe OR provide document/file that will help to setup coding style/formatting to all your colleagues.


## Need help?
Don't be afraid and feel free to ask for any additional information on: martin.jagr@valatron.com. 
I will gladly offer any kind of help in a few hours :)