## Lara-Bookrentals Web API

## Setup

<a href="https://larablog.herokuapp.com" target="_blank">Deployed API</a>

## Dependencies

<ul>
    <li>PHP 7.3 | 8.0</li>
    <li>Composer</li>
</ul>

## Getting Started
Setting up project in development mode:

<ul>
    <li>Ensure PHP 7.3 or greater is installed by running: </li>
    <p>php -v </p>
    <li>Clone the repository to your machine and navigate into it:</li>
    <p>git clone https://github.com/josephkipkemoi/larablog</p>
    <p>cd larablog</p>
    <li>Install application dependencies</li>
    <p>composer update</p>
    <li>Create a .env file and include the necessary environment variables. NB- copy from the .env.example and fill in the correct values</li>
</ul>

## Database Setup
<p>Setup database locally on your machine, add <mark>larablog</mark> as a value to the respective environment variable as below:</p>
<ul>
    <li>mysql -p['password']</li>
    <li>CREATE DATABASE [db_name];</li> 
    <li>exit;</li>
</ul>

## Running the application
<p>Inside the root folder, run the following commands in your terminal</p>

<ul>
    <li>$ php artisan migrate:fresh</li>
    <li>$ php artisan db:seed</li>
    <li>$ php artisan serve</li>
</ul>

## Running the tests
<ul>
    <li>$ ./vendor/bin/phpunit </li>
    <p>Or</p>
    <li>$ php artisan test</li>
 </ul>

## API 
<table>
<h2>User Registration and Authentication</h2>
<tr>
    <th>METHOD</th>
    <th>END POINT</th>
    <th>PARAMS</th>
</tr>
<tr>
    <td>POST</td>
    <td>/register</td>
    <td>json {"name":"Albert Einsten","email":"alber@gmail.com" , "password":"password", "confirm_password":"password"}</td>
</tr>
<tr>
    <td>POST</td>
    <td>/login</td>
    <td>json {"email":"alber@gmail.com", "password": "password"}</td>
</tr>
</table>

<table>
<h2>Balance</h2>
<tr>
    <th>METHOD</th>
    <th>END POINT</th>
    <th>PARAMS</th>
</tr>
<tr>
    <td>POST</td>
    <td>api/v1/$user->id/balances</td>
    <td>json {"balance":"70"}</td>
</tr>
<tr>
    <td>GET</td>
    <td>api/v1/$user->id/balances</td>
    <td>N/A</td>
</tr>
</table>
<table>
<h2>Category (s)</h2>
<tr>
    <th>METHOD</th>
    <th>END POINT</th>
    <th>PARAMS</th>
</tr>
<tr>
    <td>POST</td>
    <td>api/v1/categories</td>
    <td>json {"category":"Sports"}</td>
</tr>
<tr>
    <td>GET</td>
    <td>api/v1/categories</td>
    <td>N/A</td>
</tr>
</table>
<table>
<h2>Review (s)</h2>
<tr>
    <th>METHOD</th>
    <th>END POINT</th>
    <th>PARAMS</th>
</tr>
<tr>
    <td>POST</td>
    <td>api/v1/$user->id/reviews</td>
    <td>json {"review_title":"some title","review_body":"some body","review_rating":"4"}</td>
</tr>
<tr>
    <td>GET</td>
    <td>api/v1/reviews</td>
    <td>N/A</td>
</tr>
<tr>
    <td>GET</td>
    <td>api/v1/$user->id/reviews</td>
    <td>N/A</td>
</tr>
<tr>
    <td>DELETE</td>
    <td>aapi/v1/$user->id/reviews/$review->id</td>
    <td>N/A</td>
</tr>
</table>
<table>
<h2>Role</h2>
<tr>
    <th>METHOD</th>
    <th>END POINT</th>
    <th>PARAMS</th>
</tr>
<tr>
    <td>POST</td>
    <td>api/v1/roles</td>
    <td>json {"role":"Manager"}</td>
</tr>
<tr>
    <td>GET</td>
    <td>api/v1/roles</td>
    <td>N/A</td>
</tr>
</table>
<table>
<h2>Assignment</h2>
<tr>
    <th>METHOD</th>
    <th>END POINT</th>
    <th>PARAMS</th>
</tr>
<tr>
    <td>POST</td>
    <td>api/v1/$category->id/assignments</td>
    <td>json {"question":"Some quesion"}</td>
</tr>
<tr>
    <td>GET</td>
    <td>api/v1/$category->id/assignments</td>
    <td>N/A</td>
</tr>
<tr>
    <td>GET</td>
    <td>api/v1/$category->id/assignments/$assignment->id</td>
    <td>N/A</td>
</tr>
</table>
<table>
<h2>Task</h2>
<tr>
    <th>METHOD</th>
    <th>END POINT</th>
    <th>PARAMS</th>
</tr>
<tr>
    <td>POST</td>
    <td>api/v1/{$user->id}/tasks</td>
    <td>json {"assignment_id":"assignment_id","task_completed":"bool","task_completed_at":"1245","assignment_rating":"4","assignment_earning":"50","assignment_category":"Sports"}</td>
</tr>
<tr>
    <td>GET</td>
    <td>api/v1/$user->id/tasks</td>
    <td>N/A</td>
</tr>
</table>

