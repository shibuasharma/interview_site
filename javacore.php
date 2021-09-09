<!DOCTYPE html>
<html>
<head>
	<title>Interviews | HR Interviews</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style/javacore.css">

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
	<nav class="container-fluid navbar navbar-expand-sm">
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
				<a href="http://localhost/Intervews_site/Technical.php" class="nav-link"> Technical Interview </a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/mnc.php" class="nav-link"> MNC Companies </a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/gov.php" class="nav-link"> Government Job </a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link"> Other </a>
			</li>
		</ul>
	</div>
		</div>
	</nav>

	<div class="container content">
		<h1 class="text-center" >CORE JAVA</h1><br>
		
<h3> 1) What is JAVA?</h3>

<p>Ans: Java is a high-level programming language and is platform independent.

Java is a collection of objects. It was developed by Sun Microsystems. There are a lot of applications, websites and Games that are developed using Java.</p>

<h3>2) What are the features in JAVA?</h3>

<p ><b>Ans: Features of Java:</b><br>

<ul><li><b>Oops concepts</b><br>
<ul><li>Object-oriented</li>
<li>Inheritance</li>
<li>Encapsulation</li>
<li>Polymorphism</li>
<li>Abstraction</li></ul></li></ul>
<li><b>Platform independent:</b> A single program works on different platforms without any modification.</li>
<li><b>High Performance:</b> JIT (Just In Time compiler) enables high performance in Java. JIT converts the bytecode into machine language and then JVM starts the execution.</li>
<li><b>Multi-threaded:</b>A flow of execution is known as a Thread. JVM creates a thread which is called main thread. The user can create multiple threads by extending the thread class or by implementing Runnable interface.</li></p>
<h3>3) How does Java enable high performance?</h3>

<p><b>Ans:</b> Java uses Just In Time compiler to enable high performance. JIT is used to convert the instructions into bytecodes.</p>

<h3>4) What are the Java IDE’s?</h3>

<p><b>Ans:</b> Eclipse and NetBeans are the IDE's of JAVA.</p>

<h3>5) What do you mean by Constructor?</h3><br>

<p><b>Ans: The points given below explain what a Constructor is in detail:</b>

<li>When a new object is created in a program a constructor gets invoked corresponding to the class.</li>
<li>The constructor is a method which has the same name as class name.</li>
<li>If a user doesn’t create a constructor implicitly a default constructor will be created.</li>
<li>The constructor can be overloaded.</li>
<li>If the user created a constructor with a parameter then he should create another constructor explicitly without a parameter.</li></p>
<h3>6) What is meant by Local variable and Instance variable?</h3>

<p><b>Ans: Local variables</b> are defined in the method and scope of the variables that have existed inside the method itself.<br>

<b>An instance variable</b> is defined inside the class and outside the method and scope of the variables exist throughout the class.</p>

<h3>7) What is a Class?</h3>

<p><b>Ans:</b> All Java codes are defined in a class. A Class has variables and methods.<br>

<b>Variables</b> are attributes which define the state of a class.<br>

<b>Methods</b> are the place where the exact business logic has to be done. It contains a set of statements (or) instructions to satisfy the particular requirement.<br>

<b>Example:</b><br>

public class Addition{ //Class name declaration<br>
int a = 5; //Variable declaration<br>
int b= 5;<br>
public void add(){ //Method declaration<br>
int c = a+b;<br>
}<br>
}</p>
<h2>8) What is an Object?</h2>

<p>Ans: An instance of a class is called object. The object has state and behavior.

Whenever the JVM reads the “new()” keyword then it will create an instance of that class.

Example:

public class Addition{
public static void main(String[] args){
Addion add = new Addition();//Object creation
}
}
The above code creates the object for the Addition class.</p>

<h3>9)What are the Oops concepts?</h3>

<p>Ans: Oops concepts include:

Inheritance
Encapsulation
Polymorphism
Abstraction
Interface</p>
<h3>10) What is Inheritance?</h3>

<p>Ans: Inheritance means one class can extend to another class. So that the codes can be reused from one class to another class.<br><br>

Existing class is known as Super class whereas the derived class is known as a sub class.<br>

Example:<br><br>

Super class:<br>
public class Manupulation(){<br>
}<br>
Sub class:<br>
public class Addition extends Manipulation(){<br>
}<br>
Inheritance is applicable for public and protected members only. Private members can’t be <br>
inherited.</p>

<h3>11) What is Encapsulation?</h3>

<p>Ans: Purpose of Encapsulation:<br>

Protects the code from others.<br>
Code maintainability.<br><br>
Example:<br><br>

We are declaring ‘a' as an integer variable and it should not be negative.<br>

public class Addition(){<br>
int a=5;<br>
}<br>
If someone changes the exact variable as “a = -5” then it is bad.<br>

In order to overcome the problem we need to follow the below steps:<br>

We can make the variable as private or protected one.<br>
Use public accessor methods such as set<property> and get<property>.<br>
So that the above code can be modified as:<br><br>

public class Addition(){<br>
private int a = 5; //Here the variable is marked as private<br>
}<br>
Below code shows the getter and setter.<br><br>

Conditions can be provided while setting the variable.<br><br>

get A(){<br>
}<br>
set A(int a){<br>
if(a>0){// Here condition is applied<br>
.........<br>
}<br>
}<br>
For encapsulation, we need to make all the instance variables as private and create setter and getter for those variables. Which in turn will force others to call the setters rather than access the data directly.</p>

<h3>12) What is Polymorphism?</h3>

<p>Ans: Polymorphism means many forms.<br>

A single object can refer the super class or sub-class depending on the reference type which is called polymorphism.<br><br>

Example:<br><br>

Public class Manipulation(){ //Super class<br>
public void add(){<br>
}<br>
}<br>
public class Addition extends Manipulation(){ // Sub class<br>
public void add(){<br>
}<br>
public static void main(String args[]){<br>
Manipulation addition = new Addition();//Manipulation is reference type and Addition is reference type<br>
addition.add();<br>
}<br>
}<br>
Using Manipulation reference type we can call the Addition class “add()” method. This ability is known as Polymorphism.<br>

Polymorphism is applicable for overriding and not for overloading.</p>

<h3>13) What is meant by Method Overriding?</h3>

<p>Ans: Method overriding happens if the sub class method satisfies the below conditions with the Super class method:<br><br>

Method name should be same<br>
Argument should be same<br>
Return type also should be same<br>
The key benefit of overriding is that the Sub class can provide some specific information about that sub class type than the super class.<br><br>

Example:<br><br>

public class Manipulation{ //Super class<br>
public void add(){<br>
………………<br>
}<br>
}<br>

Public class Addition extends Manipulation(){<br>
Public void add(){<br>
………..<br>
}<br>
Public static void main(String args[]){<br>
Manipulation addition = new Addition(); //Polimorphism is applied<br>
addition.add(); // It calls the Sub class add() method<br>
}<br>
}<br>
addition.add() method calls the add() method in the Sub class and not the parent class. So it overrides the Super class method and is known as Method Overriding.</p>

<h3>14) What is meant by Overloading?</h3>

<p>Ans: Method overloading happens for different classes or within the same class.<br><br>

For method overloading, subclass method should satisfy the below conditions with the Super class method (or) methods in the same class itself:<br><br>

Same method name<br>
Different argument type<br>
May have different return types<br>
Example:<br><br>

public class Manipulation{ //Super class<br>
public void add(String name){ //String parameter<br>
………………<br>
}<br>
}<br><br>

Public class Addition extends Manipulation(){<br>
Public void add(){//No Parameter<br>
………..<br>
}<br>
Public void add(int a){ //integer parameter<br>

}<br>
Public static void main(String args[]){<br>
Addition addition = new Addition(); <br>
addition.add(); <br>
}<br>
}<br>
Here the add() method having different parameters in the Addition class is overloaded in the same class as well as with the super class.<br><br>

Note: Polymorphism is not applicable for method overloading.</p>

<h3>15) What is meant by Interface?</h3>

<p>Ans: Multiple inheritance cannot be achieved in java. To overcome this problem Interface concept is introduced.<br><br>

An interface is a template which has only method declarations and not the method implementation.<br>

Example:<br><br>

Public abstract interface IManupulation{ //Interface declaration<br>
Public abstract void add();//method declaration<br>
public abstract void subtract();<br>
}<br>
All the methods in the interface are internally public abstract void.<br>
All the variables in the interface are internally public static final that is constants.<br>
Classes can implement the interface and not extends.<br>
The class which implements the interface should provide an implementation for all the methods declared in the interface.<br>
public class Manupulation implements IManupulation{ //Manupulation class uses the interface
Public void add(){<br>
……………<br>
}<br>
Public void subtract(){<br>
…………….<br>
}<br>
}</p>
<h3>16) What is meant by Abstract class?</h3>

<p>Ans: We can create the Abstract class by using “Abstract” keyword before the class name. An abstract class can have both “Abstract” methods and “Non-abstract” methods that are a concrete class.<br><br>

Abstract method:<br><br>

The method which has only the declaration and not the implementation is called the abstract method and it has the keyword called “abstract”. Declarations are the ends with a semicolon.
<br><br>
Example:<br>

public abstract class Manupulation{<br>
public abstract void add();//Abstract method declaration<br>
Public void subtract(){<br>
}<br>
}<br>
An abstract class may have a Non- abstract method also.<br>
The concrete Subclass which extends the Abstract class should provide the implementation for abstract methods.</p>
<h3>17) Difference between Array and Array List.</h3>

<p>Ans: The Difference between Array and Array List can be understood from the below table:<br>

   Array                                      <br>

   Array List    <br>
Size should be given at the time of array declaration.<br>

String[] name = new String[2]	Size may not be required. It changes the size dynamically.<br>

ArrayList name = new ArrayList<br>
To put an object into array we need to specify the index.<br>

name[1] = “book”	No index required.<br>

name.add(“book”)<br>
Array is not type parameterized	ArrayList in java 5.0 are parameterized.<br>

Eg: This angle bracket is a type parameter which means a list of String.</p>
<h3>18) Difference between String, String Builder, and String Buffer.</h3>

<p>Ans: String: String variables are stored in “constant string pool”. Once the string reference changes the old value that exists in the “constant string pool”, it cannot be erased.<br>

Example:<br><br>

String name = “book”;<br>

Constant string pool<br>

Constant string pool.<br>

If the name value has changed from “book” to “pen”.<br>

Constant string pool<br>

Constant string pools<br>

Then the older value retains in the constant string pool.<br>

String Buffer:<br><br>

Here string values are stored in a stack. If the values are changed then the new value replaces the older value.<br>
The string buffer is synchronized which is thread-safe.<br>
Performance is slower than the String Builder.<br>
Example:<br><br>

String Buffer name =”book”;<br>

Stack<br>

Once the name value has been changed to “pen” then the “book” is erased in the stack.<br>

Stack1<br>

String Builder:<br>

This is same as String Buffer except for the String Builder which is not threaded safety that is not synchronized. So obviously performance is fast.</p>

<h3>19) Explain about Public and Private access specifiers.</h3>

<p>Ans: Methods and instance variables are known as members.<br><br>

Public:<br>

Public members are visible in the same package as well as the outside package that is for other packages.<br>

Public<br>

Public members in Class A are visible to Class B (Same package) as well as Class C (Different package).<br>

Private:<br>

Private members are visible in the same class only and not for the other classes in the same package as well as classes in the outside packages.<br>

Private<br>

Private members in class A is visible only in that class. It is invisible for class  B as well as class C.</p>

<h3>20) Difference between Default and Protected access specifiers.</h3>

<p>Ans: Default: Methods and variables declared in a class without any access specifiers are called default.<br><br>

Default<br>

Default members in Class A are visible to the other classes which are inside the package and invisible to the classes which are outside the package.<br>

So Class A members are visible to the Class B and invisible to the Class C.<br>

Protected:<br>

Protected<br><br>

Protected is same as Default but if a class extends then it is visible even if it is outside the package.<br>

Class A members are visible to Class B because it is inside the package. For Class C it is invisible but if Class C extends Class A then the members are visible to the Class C even if it is outside the package.</p>

<h3>21) Difference between HashMap and HashTable.</h3>

<p>Ans: Difference between HashMap and HashTable can be seen below:<br>

HashMap	HashTable<br>
Methods are not synchronized	Key methods are synchronized<br>
Not thread safety	Thread safety<br>
Iterator is used to iterate the values	Enumerator is used to iterate the values<br>
Allows one null key and multiple null values	Doesn’t allow anything that is null
Performance is high than HashTable	Performance is slow</p>
<h3>22) Difference between HashSet and TreeSet.</h3>

<p>Ans: Difference between HashSet and TreeSet can be seen below:<br><br>

HashSet	TreeSet<br>
Inserted elements are in random order	Maintains the elements in the sorted order
Can able to store null objects	Couldn’t store null objects
Performance is fast	Performance is slow</p>
<h3>23) Difference between Abstract class and Interface.</h3>

<p>Ans: Difference between Abstract Class and Interface are as follows:<br>

Abstract Class:<br>

Abstract classes have a default constructor and it is called whenever the concrete subclass is instantiated.<br>
Contains Abstract methods as well as Non-Abstract methods.<br>
The class which extends the Abstract class shouldn’t require implementing all the methods, only Abstract methods need to be implemented in the concrete sub-class.
Abstract Class contains instance variables.<br>
Interface:<br>

Doesn’t have any constructor and couldn’t be instantiated.<br>
Abstract method alone should be declared.<br>
Classes which implement the interface should provide the implementation for all the methods.
The interface contains only constants.</p>
<h3>24)  What is mean by Collections in Java?</h3>

<p>Ans: Collection is a framework that is designed to store the objects and manipulate the design to store the objects.<br><br>

Collections are used to perform the following operations:<br><br>

Searching<br>
Sorting<br>
Manipulation<br>
Insertion<br>
Deletion<br>
A group of objects is known as collections. All the classes and interfaces for collecting are available in Java utile package.</p>

<h3>25) What are all the Classes and Interfaces that are available in the collections?</h3>

<p>Ans: Given below are the Classes and Interfaces that are available in Collections:<br><br>

Interfaces:<br>

Collection<br>
List<br>
Set<br>
Map<br>
Sorted Set<br>
Sorted Map<br>
Queue<br><br>
Classes:<br>

Lists:<br>
Array List<br>
Vector<br>
Linked List<br><br>
Sets:<br>

Hash set<br>
Linked Hash Set<br>
Tree Set<br><br>
Maps:<br>

Hash Map<br>
Hash Table<br>
Tree Map<br>
Linked Hashed Map<br><br>
Queue:<br>

Priority Queue</p>
<h3>26) What is meant by Ordered and Sorted in collections?</h3>

<p>Ans:<br>

Ordered:<br>

It means the values that are stored in a collection is based on the values that are added to the collection. So we can iterate the values from the collection in a specific order.<br>

Sorted:<br>

Sorting mechanism can be applied internally or externally so that the group of objects sorted in a particular collection is based on properties of the objects.</p>

<h3>27) Explain about the different lists available in the collection.</h3>

<p>Ans: Values added to the list is based on the index position and it is ordered by index position. Duplicates are allowed.<br>

Types of Lists are:<br>

Array List:<br>

Fast iteration and fast Random Access.<br>
It is an ordered collection (by index) and not sorted.<br>
It implements Random Access Interface.<br>
Example:<br><br>

public class Fruits{<br>
public static void main (String [ ] args){<br>
ArrayList <String>names=new ArrayList <String>();<br>
names.add (“apple”);<br>
names.add (“cherry”);<br>
names.add (“kiwi”);<br>
names.add (“banana”);<br>
names.add (“cherry”);<br>
System.out.println (names);<br>
}<br>
}<br>
Output:<br><br>

[Apple, cherry, kiwi, banana, cherry]<br>

From the output, Array List maintains the insertion order and it accepts the duplicates. But not sorted.<br>

Vector:<br>

It is same as Array List.<br>

Vector methods are synchronized.<br>
Thread safety.<br>
It also implements the Random Access.<br>
Thread safety usually causes a performance hit.<br>
Example:<br><br>

public class Fruit {<br>
public static void main (String [ ] args){<br>
Vector <String> names = new Vector <String> ( );<br>
 names.add (“cherry”);<br>
names.add (“apple”);<br>
names.add (“banana”);<br>
names.add (“kiwi”);<br>
names.add (“apple”);<br>
System.out.println (“names”);<br>
}<br>
}<br>
Output:<br><br>

[cherry,apple,banana,kiwi,apple]<br>

Vector also maintains the insertion order and accepts the duplicates.<br><br>

Linked List:<br>

Elements are doubly linked to one another.<br>
Performance is slow than Array list.<br>
Good choice for insertion and deletion.<br>
In Java 5.0 it supports common queue methods peek( ), Pool ( ), Offer ( ) etc.<br>
Example:<br><br>

public class Fruit {<br>
public static void main (String [ ] args){<br>
Linkedlist <String> names = new linkedlist <String> ( ) ;<br>
names.add(“banana”);<br>
names.add(“cherry”);<br>
names.add(“apple”);<br>
names.add(“kiwi”);<br>
names.add(“banana”);<br>
System.out.println (names);<br>
}<br>
}<br>
Output<br>

[ banana,cherry,apple,kiwi,banana]<br>

Maintains the insertion order and accepts the duplicates.</p>

<h3>28) Explain about Set and their types in a collection?</h3>

<p>Ans: Set cares about uniqueness. It doesn’t allow duplications. Here “equals ( )” method is used to determine whether two objects are identical or not.<br><br>

Hash Set:<br>

Unordered and unsorted.<br>
Uses the hash code of the object to insert the values.<br>
Use this when the requirement is “no duplicates and don’t care about the order”.<br>
Example:<br><br>

public class Fruit {<br>
public static void main (String[ ] args){<br>
HashSet<String> names = new HashSet <=String>( ) ;<br>
names.add(“banana”);<br>
names.add(“cherry”);<br>
names.add(“apple”);<br>
names.add(“kiwi”);<br>
names.add(“banana”);<br>
System.out.println (names);<br>
}<br>
}<br>
Output:<br><br>

[banana, cherry, kiwi, apple]<br>

Doesn’t follow any insertion order. Duplicates are not allowed.<br>

Linked Hash set:<br>

An ordered version of the hash set is known as Linked Hash Set.<br>
Maintains a doubly-Linked list of all the elements.<br>
Use this when the iteration order is required.<br>
Example:<br>

public class Fruit {<br>
public static void main (String[ ] args){<br>
LinkedHashSet<String> names = new LinkedHashSet <String>( ) ;<br>
 names.add(“banana”);<br>
 names.add(“cherry”);<br>
 names.add(“apple”);<br>
 names.add(“kiwi”);<br>
 names.add(“banana”);<br>
 System.out.println (names);<br>
 }<br>
}<br>
Output:<br>

[banana, cherry, apple, kiwi]<br>

Maintains the insertion order in which they have been added to the Set. Duplicates are not allowed.<br><br>

Tree Set:<br>

It is one of the two sorted collections.<br>
Uses “Read-Black” tree structure and guarantees that the elements will be in an ascending order.<br>
We can construct a tree set with the constructor by using comparable (or) comparator.<br>
Example:<br>

public class Fruits{<br>
public static void main (String[ ]args) {<br>
Treeset<String> names= new TreeSet<String>( ) ;<br>
names.add(“cherry”);<br>
names.add(“banana”);<br>
names.add(“apple”);<br>
names.add(“kiwi”);<br>
names.add(“cherry”);<br>
System.out.println(names);<br>
}<br>
}<br>
Output:<br>

[apple, banana, cherry, kiwi]<br>

TreeSet sorts the elements in an ascending order. And duplicates are not allowed.</p>

<h3>29). Explain about Map and their types.</h3>

<p>Ans: Map cares about unique identifier. We can map a unique key to a specific value. It is a key/value pair. We can search a value, based on the key. Like set, Map also uses “equals ( )” method to determine whether two keys are same or different.<br>

Hash Map:<br>

Unordered and unsorted map.<br>
Hashmap is a good choice when we don’t care about the order.<br>
It allows one null key and multiple null values.<br>
Example:<br>

Public class Fruit{<br>
Public static void main(String[ ] args){<br>
HashMap<Sting,String> names =new HashMap<String,String>( );<br>
names.put(“key1”,“cherry”);<br>
names.put (“key2”,“banana”);<br>
names.put (“key3”,“apple”);<br>
names.put (“key4”,“kiwi”);<br>
names.put (“key1”,“cherry”);<br>
System.out.println(names);<br>
}<br>
 }<br>
Output:<br>

{key2 =banana, key1=cherry, key4 =kiwi, key3= apple}<br>
<br>
Duplicate keys are not allowed in Map.<br>

Doesn’t maintain any insertion order and is unsorted.<br>

Hash Table:<br>

Like vector key, methods of the class are synchronized.<br>
Thread safety and therefore slows the performance.<br>
Doesn’t allow anything that is null.<br>
Example:<br>

public class Fruit<br>
public static void main(String[ ]args){<br>
Hashtable<Sting,String> names =new Hashtable<String,String>( );<br>
names.put(“key1”,“cherry”);<br>
names.put(“key2”,“apple”);<br><br>
names.put(“key3”,“banana”);<br>
names.put(“key4”,“kiwi”);<br>
names.put(“key2”,“orange”);<br>
System.out.println(names);<br>
}<br>
 }<br>
Output:<br>

{key2=apple, key1=cherry,key4=kiwi, key3=banana}<br>

Duplicate keys are not allowed.<br>

 Linked Hash Map:<br>
<br>
Maintains insertion order.<br>
Slower than Hash map.<br>
Can expect a faster iteration.<br>
Example:<br>

public class Fruit{<br>
public static void main(String[ ] args){<br>
LinkedHashMap<Sting,String> names =new LinkedHashMap<String,String>( );<br>
 names.put(“key1”,“cherry”);<br>
 names.put(“key2”,“apple”);<br>
 names.put(“key3”,“banana”);<br><br>
 names.put(“key4”,“kiwi”);<br>
 names.put(“key2”,“orange”);<br>
 System.out.println(names);<br>
 }<br>
 }<br>
Output:<br>

{key2=apple, key1=cherry,key4=kiwi, key3=banana}<br>

Duplicate keys are not allowed.<br>

TreeMap:<br>

Sorted Map.<br>
Like Tree set, we can construct a sort order with the constructor.<br>
Example:<br>

public class Fruit{<br>
public static void main(String[ ]args){<br>
TreeMap<Sting,String> names =new TreeMap<String,String>( );<br>
names.put(“key1”,“cherry”);<br>
names.put(“key2”,“banana”);<br>
names.put(“key3”,“apple”);<br>
names.put(“key4”,“kiwi”);<br>
names.put(“key2”,“orange”);<br>
System.out.println(names);<br>
}<br>
}<br>
Output:<br>

{key1=cherry, key2=banana, key3 =apple, key4=kiwi}<br>

It is sorted in ascending order based on the key. Duplicate keys are not allowed.</p>

<h3>30) Explain the Priority Queue.</h3>

<p>Ans: Queue Interface

Priority Queue: Linked list class has been enhanced to implement the queue interface. Queues can be handled with a linked list. Purpose of a queue is “Priority-in, Priority-out”.

Hence elements are ordered either naturally or according to the comparator. The elements ordering represents their relative priority.</p>

<h2>31) What is mean by Exception?</h2>

<p>Ans: An Exception is a problem that can occur during the normal flow of an execution. A method can throw an exception when something wails at runtime. If that exception couldn’t be handled, then the execution gets terminated before it completes the task.

If we handled the exception, then the normal flow gets continued. Exceptions are a subclass of java.lang.Exception.

Example for handling Exception:

try{
//Risky codes are surrounded by this block
}catch(Exception e){
//Exceptions are caught in catch block
}</p>
<h2>32) What are the types of Exceptions?</h2>

<p>Ans: Two types of Exceptions are explained below in detail.

Checked Exception:

These exceptions are checked by the compiler at the time of compilation. Classes that extend Throwable class except Runtime exception and Error are called checked Exception.

Checked Exceptions must either declare the exception using throes keyword (or) surrounded by appropriate try/catch.

E.g. ClassNotFound Exception

Unchecked Exception:

These exceptions are not checked during the compile time by the compiler.  The compiler doesn’t force to handle these exceptions.

It includes:

Arithmetic Exception
ArrayIndexOutOfBounds Exception</p>
<h2>33) What are the different ways to handle exceptions?</h2>

<p>Ans: Two different ways to handle exception are explained below:

#1) Using try/catch:

A risky code is surrounded by try block. If an exception occurs, then it is caught by the catch block which is followed by the try block.

Example:

class Manipulation{
public static void main(String[] args){
add();
}
Public void add(){
try{
addition();
}catch(Exception e){
e.printStacktrace();
}
}
}
#2) By declaring throws keyword:

At the end of the method, we can declare the exception using throws keyword.

Example:

class Manipulation{
public static void main(String[] args){
add();
}
public void add() throws Exception{
addition();
}
}</p>
<h2>34) What are the Advantages of Exception handling?</h2>

<p>Ans: Given below are the advantages:

The normal flow of the execution won’t be terminated if exception got handled
We can identify the problem by using catch declaration</p>
 <h2>35) What are Exception handling keywords in Java?</h2>

<p>Ans: Given below are the two Exception Handling Keywords:

try:

When a risky code is surrounded by a try block. An exception occurring in the try block is caught by a catch block. Try can be followed either by catch (or) finally (or) both. But any one of the blocks is mandatory.

catch:

This is followed by try block. Exceptions are caught here.

finally:

This is followed either by try block (or) catch block. This block gets executed regardless of an exception. So generally clean up codes are provided here.</p>

<h2>36) Explain about Exception Propagation.</h2>

<p>Ans: Exception is first thrown from the method which is at the top of the stack. If it doesn’t catch, then it pops up the method and moves to the previous method and so on until they are got.

This is called Exception propagation.

Example:

public class Manipulation{
public static void main(String[] args){
add();
}
public void add(){
addition();
}</p>
<h2>37) What is the final keyword in Java?</h2>

<p>Ans:

Final variable:

Once a variable is declared as final, then the value of the variable could not be changed. It is like a constant.

Example:

final int = 12;

Final method:

A final keyword in a method that couldn’t be overridden. If a method is marked as a final, then it can’t be overridden by the subclass.

Final class:

If a class is declared as final, then the class couldn’t be subclassed. No class can extend the final class.</p>

<h2>38) What is a Thread?</h2>

<p>Ans: In Java, the flow of a execution is called Thread. Every java program has at least one thread called main thread, the Main thread is created by JVM. The user can define their own threads by extending Thread class (or) by implementing Runnable interface. Threads are executed concurrently.

Example:

public static void main(String[] args){//main thread starts here
}</p>
<h2>39) How do you make a thread in Java?</h2>

<p>Ans: There are two ways available in order to make a thread.

#1) Extend Thread class:

Extending a Thread class and override the run method. The thread is available in java.lang.thread.

Example:

Public class Addition extends Thread {
public void run () {
}
}
The disadvantage of using a thread class is that we cannot extend any other classes because we have already extend the thread class. We can overload the run () method in our class.

#2) Implement Runnable interface:

Another way is implementing the runnable interface. For that we should provide the implementation for run () method which is defined in the interface.

Example:

Public class Addition implements Runnable {
public void run () {
}
}</p>
<h2>40) Explain about join () method.</h2>

<p>Ans: Join () method is used to join one thread with the end of the currently running thread.

Example:

public static void main (String[] args){
Thread t = new Thread ();
t.start ();
t.join ();
}
From the above code, the main thread started the execution. When it reaches the code t.start() then ‘thread t’ starts the own stack for the execution. JVM switches between the main thread and ‘thread t’.

Once it reaches the code t.join() then ‘thread t’ alone is executed and completes its task, then only main thread started the execution.

It is a non-static method. Join () method has overloaded version. So we can mention the time duration in join () method also “.s”.</p>

<h2>41) What does yield method of the Thread class do?</h2>

<p>Ans: A yield () method moves the currently running thread to a  runnable state and allows the other threads for execution. So that equal priority threads have a chance to run. It is a static method. It doesn’t release any lock.

Yield () method moves the thread back to the Runnable state only, and not the thread to sleep (), wait () (or) block.

Example:

public static void main (String[] args){
Thread t = new Thread ();
t.start ();
}
public void run(){
Thread.yield();
}
}</p>
<h2>42) Explain about wait () method.</h2>

<p>Ans: wait () method is used to make the thread to wait in the waiting pool. When a wait () method is executed during a thread execution then immediately the thread gives up the lock on the object and goes to the waiting pool. Wait () method tells the thread to wait for a given amount of time.

Then the thread will wake up after notify () (or) notify all () method is called.

Wait() and the other above-mentioned methods do not give the lock on the object immediately until the currently executing thread completes the synchronized code. It is mostly used in synchronization.

Example:

public static void main (String[] args){
Thread t = new Thread ();
t.start ();
Synchronized (t) {
Wait();
}
}</p>
<h2>43) Difference between notify() method and notifyAll() method in Java.</h2>

<p>Ans: Given below are few differences between notify() method and notifyAll() method

notify()	notifyAll()
This method is used to send a signal to wake up a single thread in the waiting pool.	This method sends the signal to wake up all the threads in a waiting spool.</p>
<h2>44) How to stop a thread in java? Explain about sleep () method in a thread?</h2>

<p>Ans: We can stop a thread by using the following thread methods.

Sleeping
Waiting
Blocked
Sleep:

Sleep () method is used to sleep the currently executing thread for the given amount of time. Once the thread is wake up it can move to the runnable state. So sleep () method is used to delay the execution for some period.

It is a static method.

Example:

Thread. Sleep (2000)

So it delays the thread to sleep 2 milliseconds. Sleep () method throws an uninterrupted exception, hence we need to surround the block with try/catch.

public class ExampleThread implements Runnable{
public static void main (String[] args){
Thread t = new Thread ();
t.start ();
}
public void run(){
try{
Thread.sleep(2000);
}catch(InterruptedException e){
}
}</p>
<h2>45) When to use Runnable interface Vs Thread class in Java?</h2>

<p>Ans: If we need our class to extend some other classes other than the thread then we can go with the runnable interface because in java we can extend only one class.

If we are not going to extend any class then we can extend the thread class.</p>

<h2>46) Difference between start() and run() method of thread class.</h2>

<p>Ans: Start() method creates new thread and the code inside the run () method is executed in the new thread. If we directly called the run() method then a new thread is not created and the currently executing thread will continue to execute the run() method.</p>

<h2>47) What is Multi-threading?</h2>

<p>Ans: Multiple threads are executed simultaneously. Each thread starts their own stack based on the flow (or) priority of the threads.

Example Program:

public class MultipleThreads implements Runnable
{
public static void main (String[] args){//Main thread starts here
Runnable r = new runnable ();
Thread t=new thread ();
t.start ();//User thread starts here
Addition add=new addition ();
}
public void run(){
go();
}//User thread ends here
}</p>
<h2>48) What is the disadvantage of Synchronization?</h2>

<p>Ans: Synchronization is not recommended to implement all the methods. Because if one thread accesses the synchronized code then the next thread should have to wait. So it makes slow performance on the other end.
</p>
<h2>49) What is meant by Serialization?</h2>

<p>Ans: Converting a file into a byte stream is known as Serialization. The objects in the file is converted to the bytes for security purposes. For this, we need to implement java.io.Serializable interface. It has no method to define.

Variables that are marked as transient will not be a part of the serialization. So we can skip the serialization for the variables in the file by using a transient keyword.</p>

<h2>50) What is the purpose of a transient variable?</h2>

<p>Ans: Transient variables are not part of the serialization process. During deserialization, the transient variables values are set to default value. It is not used with static variables.

Example:

transient int numbers;</p>



	</div>

	


<div class="footerdiv">
<footer>
	<p class="footercont">&copy; Copyright 2019-2020 www.jobpreperation.com. All rights reserved. Developed by JobPreperation.</p>
</footer>
</div>	    


	

</body>
</html>