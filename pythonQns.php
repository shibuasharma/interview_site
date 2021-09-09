<!DOCTYPE html>
<html>
<head>
	<title>Interviews | HR Interviews</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style/pythonqns.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid">
		<a href="http://localhost/Intervews_site/mysite.php" class="navbar-brands">PrepInterviews</a>
		<h6 class="top-head">INDIA'S FIRST INTERVIEWS SITE</h6>
	</div>
	<nav class="navbar navbar-expand-sm">
		<div class="container">
			
			<button class="navbar-toggler navbar-dark bg-info ml-auto" data-toggle="collapse" data-target="#navbarid">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar navbar-collapse" id="navbarid">
			<ul class="navbar-nav text-center ml-auto">
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/mysite.php" class="nav-link"> Home </a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/HRinterviews.php" class="nav-link"> HR Interviews </a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/Technical.php" class="nav-link"> Technical Interviews </a>
			</li>
			<!-- <li class="nav-item">
				<a href="NonTech.php" class="nav-link"> Non-Technical Interview </a>
			</li> -->
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/mnc.php" class="nav-link"> MNC Companies </a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/gov.php" class="nav-link"> Government Job </a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link"> Blogs </a>
			</li>
		</ul>
	</div>
		</div>
	</nav>

	<div class="container content">
		<h1 class="text-center" >Python interviews questions</h1><br>
		
<h3>1) What is Python? What are the benefits of using Python?</h3>

<p>Python is a programming language with objects, modules, threads, exceptions and automatic memory management. The benefits of pythons are that it is simple and easy, portable, extensible, build-in data structure and it is an open source.</p>

<h3>2) What is PEP 8?</h3>

<p>PEP 8 is a coding convention, a set of recommendation, about how to write your Python code more readable.</p>

<h3>3) What is pickling and unpickling?</h3>

<p>Pickle module accepts any Python object and converts it into a string representation and dumps it into a file by using dump function, this process is called pickling. While the process of retrieving original Python objects from the stored string representation is called unpickling.</p>

<h3>4) How Python is interpreted?</h3>

<p>Python language is an interpreted language. Python program runs directly from the source code. It converts the source code that is written by the programmer into an intermediate language, which is again translated into machine language that has to be executed.</p>

<h3>5) How memory is managed in Python?</h3>

<p>Python memory is managed by Python private heap space. All Python objects and data structures are located in a private heap. The programmer does not have an access to this private heap and interpreter takes care of this Python private heap.
The allocation of Python heap space for Python objects is done by Python memory manager. The core API gives access to some tools for the programmer to code.
Python also have an inbuilt garbage collector, which recycle all the unused memory and frees the memory and makes it available to the heap space.</p>
<h3>6) What are the tools that help to find bugs or perform static analysis?</h3>

<p>PyChecker is a static analysis tool that detects the bugs in Python source code and warns about the style and complexity of the bug. Pylint is another tool that verifies whether the module meets the coding standard.</p>

<h3>7) What are Python decorators?</h3>

<p>A Python decorator is a specific change that we make in Python syntax to alter functions easily.</p>

<h3>8) What is the difference between list and tuple?</h3>

<p>The difference between list and tuple is that list is mutable while tuple is not. Tuple can be hashed for e.g as a key for dictionaries.</p>

<h3>9) How are arguments passed by value or by reference?</h3>

<p>Everything in Python is an object and all variables hold references to the objects. The references values are according to the functions; as a result you cannot change the value of the references. However, you can change the objects if it is mutable.</p>

<h3>10) What is Dict and List comprehensions are?</h3>

<p>They are syntax constructions to ease the creation of a Dictionary or List based on existing iterable.</p>
<h3>11) What are the built-in type does python provides?</h3>
<p>There are mutable and Immutable types of Pythons built in types Mutable built-in types

List
Sets
Dictionaries
Immutable built-in types

Strings
Tuples
Numbers</p>
<h3>12) What is namespace in Python?</h3>

<p>In Python, every name introduced has a place where it lives and can be hooked for. This is known as namespace. It is like a box where a variable name is mapped to the object placed. Whenever the variable is searched out, this box will be searched, to get corresponding object.</p>

<h3>13) What is lambda in Python?</h3>

<p>It is a single expression anonymous function often used as inline function.</p>

<h3>14) Why lambda forms in python does not have statements?</h3>

<p>A lambda form in python does not have statements as it is used to make new function object and then return them at runtime.</p>

<h3>15) What is pass in Python?</h3>

<p>Pass means, no-operation Python statement, or in other words it is a place holder in compound statement, where there should be a blank left and nothing has to be written there.</p>

<h3>16) In Python what are iterators?</h3>

<p>In Python, iterators are used to iterate a group of elements, containers like list.</p>

<h3>17) What is unittest in Python?</h3>

<p>A unit testing framework in Python is known as unittest. It supports sharing of setups, automation testing, shutdown code for tests, aggregation of tests into collections etc.</p>

<h3>18) In Python what is slicing?</h3>

<p>A mechanism to select a range of items from sequence types like list, tuple, strings etc. is known as slicing.</p>

<h3>19) What are generators in Python?</h3>

<p>The way of implementing iterators are known as generators. It is a normal function except that it yields expression in the function.</p>

<h3>20) What is docstring in Python?</h3>


<p>A Python documentation string is known as docstring, it is a way of documenting Python functions, modules and classes.</p>

<h3>21) How can you copy an object in Python?</h3>

<p>To copy an object in Python, you can try copy.copy () or copy.deepcopy() for the general case. You cannot copy all objects but most of them.</p>

<h3>22) What is negative index in Python?</h3>

<p>Python sequences can be index in positive and negative numbers. For positive index, 0 is the first index, 1 is the second index and so forth. For negative index, (-1) is the last index and (-2) is the second last index and so forth.</p>

<h3>23) How you can convert a number to a string?</h3>

<p>In order to convert a number into a string, use the inbuilt function str(). If you want a octal or hexadecimal representation, use the inbuilt function oct() or hex().</p>

<h3>24) What is the difference between Xrange and range?</h3>

<p>Xrange returns the xrange object while range returns the list, and uses the same memory and no matter what the range size is.</p>

<h3>25) What is module and package in Python?</h3>

<p>In Python, module is the way to structure program. Each Python program file is a module, which imports other modules like objects and attributes.

The folder of Python program is a package of modules. A package can have modules or subfolders.</p>

<h3>26) Mention what are the rules for local and global variables in Python?</h3>

<p>Local variables: If a variable is assigned a new value anywhere within the function's body, it's assumed to be local.

Global variables: Those variables that are only referenced inside a function are implicitly global.</p>

<h3>27) How can you share global variables across modules?</h3>

<p>To share global variables across modules within a single program, create a special module. Import the config module in all modules of your application. The module will be available as a global variable across modules.</p>

<h3>28) Explain how can you make a Python Script executable on Unix?</h3>

<p>To make a Python Script executable on Unix, you need to do two things,
Script file's mode must be executable and
the first line must begin with # ( #!/usr/local/bin/python)</p>
<h3>29) Explain how to delete a file in Python?</h3>

<p>By using a command os.remove (filename) or os.unlink(filename)</p>

<h3>30) Explain how can you generate random numbers in Python?</h3>

<p>To generate random numbers in Python, you need to import command as<br>

import random<br>

random.random()<br>

This returns a random floating point number in the range (0,1)</p>

<h3>31) Explain how can you access a module written in Python from C?</h3>

<p>You can access a module written in Python from C by following method,<br>

Module = =PyImport_ImportModule("<modulename>");</p>

<h3>32) Mention the use of // operator in Python?</h3>

<p>It is a Floor Divisionoperator , which is used for dividing two operands with the result as quotient showing only digits before the decimal point. For instance, 10//5 = 2 and 10.0//5.0 = 2.0.</p>

<h3>33) Mention five benefits of using Python?</h3>

<p>Python comprises of a huge standard library for most Internet platforms like Email, HTML, etc.<br>
Python does not require explicit memory management as the interpreter itself allocates the memory to new variables and free them automatically
Provide easy readability due to use of square brackets
Easy-to-learn for beginners
Having the built-in data types saves programming time and effort from declaring variables</p>
<h3>34) Mention the use of the split function in Python?</h3>

<p>The use of the split function in Python is that it breaks a string into shorter strings using the defined separator. It gives a list of all words present in the string.</p>

<h3>35) Explain what is Flask & its benefits?</h3>

<p>Flask is a web micro framework for Python based on "Werkzeug, Jinja 2 and good intentions" BSD licensed. Werkzeug and jingja are two of its dependencies.<br><br>

Flask is part of the micro-framework. Which means it will have little to no dependencies on external libraries. It makes the framework light while there is little dependency to update and less security bugs.</p>

<h3>36) Mention what is the difference between Django, Pyramid, and Flask?</h3>

<p>Flask is a "microframework" primarily build for a small application with simpler requirements. In flask, you have to use external libraries. Flask is ready to use.<br><br>

Pyramid are build for larger applications. It provides flexibility and lets the developer use the right tools for their project. The developer can choose the database, URL structure, templating style and more. Pyramid is heavy configurable.<br><br>

Like Pyramid, Django can also used for larger applications. It includes an ORM.</p>

<h3>37) Mention what is Flask-WTF and what are their features?</h3>

<p>Flask-WTF offers simple integration with WTForms. Features include for Flask WTF are<br>

Integration with wtforms<br>
Secure form with csrf token<br>
Global csrf protection<br>
Internationalization integration<br>
Recaptcha supporting<br>
File upload that works with Flask Uploads</p>
<h3>38) Explain what is the common way for the Flask script to work?</h3>

<p>The common way for the flask script to work is<br>

Either it should be the import path for your application
Or the path to a Python file</p>
<h3>39) Explain how you can access sessions in Flask?</h3>

<p>A session basically allows you to remember information from one request to another.<br>In a flask, it uses a signed cookie so the user can look at the session contents and modify. The user can modify the session if only it has the secret key Flask.secret_key.</p>

<h3>40) Is Flask an MVC model and if yes give an example showing MVC pattern for your application?</h3>

<p>Basically, Flask is a minimalistic framework which behaves same as MVC framework. So MVC is a perfect fit for Flask, and the pattern for MVC we will consider for the following example</p>

<p>from flask import Flask<br>

app = Flask(_name_)<br>

@app.route("/")<br>

Def hello():<br>

return "Hello World"<br>

app.run(debug = True)

</p>
<p>In this code your,</p>

<li>from flask import Flask</li>

<p>app = Flask(_name_)</p>

<li>View part will be</li>
<p>@app.route("/")<br>

Def hello():<br>

return "Hello World"</p>

<li>While you model or main part will be</li>
<p>app.run(debug = True)</p>


<h3>41) Explain database connection in Python Flask?</h3>

<p>Flask supports database powered application (RDBS). Such system requires creating a schema, which requires piping the shema.sql file into a sqlite3 command. So you need to install sqlite3 command in order to create or initiate the database in Flask.<br>

<p>Flask allows to request database in three ways</p>

<li>before_request() : They are called before a request and pass no arguments</li>
<li>after_request() : They are called after a request and pass the response that will be sent to the client</li>
<li>teardown_request(): They are called in situation when exception is raised, and response are not guaranteed. They are called after the response been constructed. They are not allowed to modify the request, and their values are ignored.</li></p>
<h3>42) You are having multiple Memcache servers running Python, in which one of the memcacher server fails, and it has your data, will it ever try to get key data from that one failed server?</h3>

<p>The data in the failed server won't get removed, but there is a provision for auto-failure, which you can configure for multiple nodes. Fail-over can be triggered during any kind of socket or Memcached server level errors and not during normal client errors like adding an existing key, etc.</p>

<h3>43) Explain how you can minimize the Memcached server outages in your Python Development?</h3>

<p>When one instance fails, several of them goes down, this will put larger load on the database server when lost data is reloaded as client make a request. To avoid this, if your code has been written to minimize cache stampedes then it will leave a minimal impact<br>
Another way is to bring up an instance of Memcached on a new machine using the lost machines IP address<br>
Code is another option to minimize server outages as it gives you the liberty to change the Memcached server list with minimal work<br>
Setting timeout value is another option that some Memcached clients implement for Memcached server outage. When your Memcached server goes down, the client will keep trying to send a request till the time-out limit is reached</p>
<h3>44) Explain what is Dogpile effect? How can you prevent this effect?</h3>

<p>Dogpile effect is referred to the event when cache expires, and websites are hit by the multiple requests made by the client at the same time. This effect can be prevented by using semaphore lock. In this system when value expires, first process acquires the lock and starts generating new value.</p>

<h3>45) Explain how Memcached should not be used in your Python project?</h3>

<p>Memcached common misuse is to use it as a data store, and not as a cache
Never use Memcached as the only source of the information you need to run your application. Data should always be available through another source as well
Memcached is just a key or value store and cannot perform query over the data or iterate over the contents to extract information
Memcached does not offer any form of security either in encryption or authentication</p>




	</div>

	


<div class="footerdiv">
<footer><hr>
	<p class="footercont">&copy; Copyright 2019-2020 www.jobpreperation.com. All rights reserved. Developed by JobPreperation.</p>
</footer>
</div>	    


	

</body>
</html>