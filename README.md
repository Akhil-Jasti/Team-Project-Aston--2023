# Team6
# Poject title: GET MOBILE
# Contributers: Akhil Jasti (220337366)
Akhil Jasti (220337366) developed all of the project's code, including the frontend and backend. The following description includes all the specifics of the project, the technologies used to construct it, and instructions for installing and using it.
## Summary of the Project: 
In this era of the internet, e-commerce keeps growing. An e-commerce website will put our company and products in the hands of consumers no matter where they are and which device they’re using. Whenever a customer needs a new mobile phone we’ll sell, all they need to do is open their laptop or smartphone, browse through our website and purchase the products they desire. The main aim is to sell mobile phones by creating a larger market, lowering the cost and it could scale up quickly and have unlimited shelf space. 
## The project implementation aims to achieve following objectives: 
+ To design an online mobile phone e-commerce website system.
+ To provide a purchase solution for the mobile customers.
+ To develop a database to store information on mobile products.
+ To demonstrate the functionalities of the E-commerce PhonEra.com website.

## Technologies Used:

Front-End:
+	HTML5
+	CSS
+	JavaScript
+	Bootstrap

Back-End:
+	PHP
+	MySQL

1. The primary technologies used for front-end web development are HTML, CSS, and JavaScript. Web pages are composed of HTML for their structure and content, CSS for their styling and layout, and JavaScript for their interactive and dynamic behaviour.
2. Popular options for back-end web development include PHP and MySQL. PHP is a language for creating server-side scripts that can be used to handle form submissions, build dynamic web pages, and communicate with databases. With the help of the database management system MySQL, programmers may save and retrieve data from databases.
3. For front-end development, developers can design aesthetically pleasing and interactive web pages that function in any browser by using HTML, CSS, and JavaScript. For controlling server-side activities and storing and managing data, PHP and MySQL offer a potent back-end solution.
4. These technologies work together to create a full-stack web development solution that can run a variety of online apps. Developers can construct modular, scalable apps that are simpler to maintain and upgrade over time by separating the front-end and back-end development.

# How to install and run the project in localhost
## Step 1:
+ First of all,We need to download and install [Xampp](https://www.apachefriends.org/download.html) from this link.
+ After downloading In the first page, select the components you want to install.
+ ![Screenshot of first page, select components as shown in image](https://d1jnx9ba8s6j9r.cloudfront.net/blog/wp-content/uploads/2019/07/Xamp-how-to-run-php-program-Edureka.png)
+ Select the installation directory so that all the components that you choose will be installed in this directory. 
+ (**NOTE: let it be xampp don't change it**)
+ ![Screenshot of directory selection as shown in image](https://d1jnx9ba8s6j9r.cloudfront.net/blog/wp-content/uploads/2019/07/Xamp-Installation-how-to-run-php-program-Edureka-1.png)
+ After that, click on **next** to get **install**
+ Once you are done with Xampp installation, let’s move ahead and see how to run a PHP file in xampp server.
## Step2:
+	After completion of the installation, you can use the XAMPP Control Panel to start/ stop all servers.
+	Start MySQL and Apache servers.
+	![screenshot of xampp control panel to start/ stop servers](https://d1jnx9ba8s6j9r.cloudfront.net/blog/wp-content/uploads/2019/07/Xamp-Control-Panel-how-to-run-php-program-Edureka-1.jpg)

**NOTE: If there is any MySQL servers installed in your PC please stop them in the system environment and later connect it in Xampp**
## Step3:
After both servers Apache and MySQL has got started and changed its colour to green follow the following instructions:
+	Minimise the xampp control panel tab.
+	Pull the folder named **ecom** from the git repository.
+	Copy that ecom folder to **htdocs(C:/Program Files/XAMPP/htdocs)**

Some Steps guide you to navigate copying folder to htdocs:

1. open Windows(C) in file explorer and then you find **xampp** file.
2. open that xampp file and there you can find **htdocs** folder. 
3. copy our ecom project file over there.
## Step 4: 
In order to get the dashboard for localhost: [search](http://localhost) in any browser.
Now run our code, [Open](http://localhost/ecom/) it gets executed.
For admin our project admin page, [open](http://localhost/ecom/admin_login.php) it gets executed.
+ We created default admin credentials in our database systems. You can acess the admin page from given below credentials

+ email: **admin@gmail.com**
+ Password: **admin** 

**That's it! Explore our website..**
# Total working Functionalities and How to Explore them
## 1. LOGIN:
1. The login option is located in the right corner of the website's fixed navbar, which is visible as soon as you access website.
2. After selecting the login option, you will be prompted for your password and email. Use the following
+ Email: **akhi123@gmail.com**
+ Password: **akhi123**
## 2. CREATE ACCOUNT:
1. The Registration option is located in the right corner of the website's fixed navbar, which you may see when you first access website.
2. When you select the login option, you will be prompted for some basic information, including your username, email address, and password. You will also be prompted to confirm your password by typing it in again exactly as you did the first time.
3. After entering all of the information, click continue. The login screen will then open, where you must enter the credentials you previously created.
4. Login will be successful, you can log in at any time using the credentials you created.
## 3. Products list:
1. The "Explore Deals & Offers" option can be found in the fixed navbar that is visible when you first visit the website.
2. Selecting that choice will take you directly to the products list.
4. There is a list of the products that are offered on our website.
## 4. Add to Cart:
1. After Login, By clicking the "Add To Cart" button on each product list, you can add the products that were listed in the products list to your shopping basket.
2. You can put several items in your shopping basket.
3. After logging in, the cart button that was accessible on the navbar in the right corner allows you to access your personal cart.
4. After clicking, you'll be taken to your cart page where you can view the items you've added.
5. After adding a number of items to your cart, the total cost will be displayed.
## 5. Admin Page:
+ You can access the following three primary features on the admin page:
1. Add Products
   _ When you click the "Add Products" button on the admin page's right side and enter the required information, including the product name, price, and uploading the product image on the left side, you may then click the add product button.
   _ The product and the details you have provided will be uploaded to the products page in the client's website when you click the add product button.
2. List Products 
   _ The list of all the products on our website will appear when you click the button labelled "List Products."
   _ You can delete the products you need to take off our website from the list that is displayed.
   _ The product will be removed from the website if you click the Delete button that was located next to the product list.
3. Orders
   _ You can view a list of all the products that our customers have ordered by clicking the "Orders" button.

**These are the total functionalities which are completely working and connected with Backend**
## How to Check database tables:
1. open the xampp control pannel.
2. click the MySQL server's admin button.
3. Click on the "mobile" option to access the mobile database.
4. There are five tables that include information about the administrator, customers, orders, payments, and products.
5. You can access the relevant information that was saved in the database, those you entered on the front end page by clicking on each table.


