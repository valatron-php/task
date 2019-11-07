# Task description
This task should take up to **1 MH**. There are no limitations in terms of framework/libraries usage.
However try to create your app as project that will expand in future.

## Setup: 
You have three tables in a relation database. These tables are defined as follows:

table: user
---
| column | type |
| --- | --- |
| id | integer PRIMARY |
| name | string(20) UNIQUE |
| created_at | timestamp |
| id_role | integer (foreign key to role.id) NOT NULL |

table: role
---
| column | type |
| --- | --- |
| id | integer PRIMARY |
| name | string(5) |

table: token
---
| column | type |
| --- | --- |
| id | integer PRIMARY |
| name | string(5) |
| created_at | timestamp |
| id_user | integer (foreign key to user.id) NOT NULL |

## Expectations
Your app should do successfully the following:
1. Have an endpoint at `api/tokens` which will return a JSON reply with all tokens and all their data.
1. Implement provided interfaces in `model` directory with described functionality.
1. Generate random amount of assigned tokens.
1. Token name must be obtained from function, which will always return string following these rules:
    1. Must be exactly 5 characters long
    1. Must have only uppercase characters only [A-Z]
    1. Ensure that app cannot be successfully deployed if rules above are not valid (someone changes the function)
    
    
## Conditions & additional points
Take into account following:

1. Creation of users & roles (if present) should be standalone process
1. Your code will be launched on following server:
    1. php-fpm 7.2.24
    1. nginx server
    1. Linux Debian x64
    1. Code is installed via CI tool
    1. Unknown relation database (PostgreSQL, MySQL, MSSQL, MariaDB...)
1. It will also be sent to your colleagues developers with different versions of PHP and systems (Windows, Mac OS...)
1. Columns like `id`, `name`, `created_at`, `id_users` are going to be used often in future development.
1. [optional] Describe OR prepare solution for situation, when tables are missing.
1. [optional] Prepare structure for template and render it using HTML that will have following:
    1. List of all users
    1. Each user have iterable structure of roles
    1. Each user have iterable structure of tokens that are max. 2 days old