# Web Programming Project - CGG CAFE - Team 3

The website is for a Coffee shop or a Café. It is a business website designed for the customers so they can contact and get to know about the Café. The theme of our website is modern and cozy. We used colors such as brown, beige, white, cream which reminds people of Coffee beans, chocolate and milk. It is designed to feel welcoming and relaxing.


## Table of Contents
1. [Project Overview](#web-programming-project---cgg-cafe---team-3)
2. [Features](#features)
    * [Feature 1: Menu & Ordering](#feature-1-menu-integration-and-order-creation)
    * [Feature 2: Table Reservations (CRUD)](#feature-2-table-reservation-system-full-crud)
    * [Feature 3: Authentication](#feature-3-user-authentication-and-account-storage)
3. [Database Tables](#database-tables)
4. [ER Diagram](#entitiy-relationship-er-diagram)
5. [Created Forms](#created-forms)
6. [Created Tables List](#created-tables)
7. [Target Audience](#target-audience)
8. [Visual Design & Effects](#visual-effect)
9. [Color Palette](#color-palette)
10. [Team Contributions](#team-members-and-individual-contributions)


## Project Background

When we initially started this project for the previous module '**Building a Static Website**' it was more focused on these following things:

•	View the menu

•	Reserve tables for specific time and date

•	Find the information’s such as address, contact details, provide-give feedback, opening hours

Further continuing this project for our current '**Web Programming**' module we will be adding a few more things, such as:

• The 'Menu' page being able to take in orders - store the order datas,

• The 'Create a Booking' page is able to take in booking requests and record the data aswell,

• A new page 'Log In' is added where people can log in so they can book tables and order drinks easily.

• Another new feature 'Cart' or 'Add to cart' had been added so people can select/order multiple items from our menu and check out with all of the products they want at the end easily.

## Features

In this section we track the implementation of our database-driven functionality.

- Feature 1: Dynamic Menu and Order Creation Logic. (by Subhanjan)
  
- Feature 2: Table Reservation System with Full CRUD. (by Ruhan)
  
- Feature 3: User Login Database. (by Maheesha)


### Feature 1: Menu Integration and Order Creation 

This feature bridges the visual menu with the background ordering database.

• Description: Developed the menu.php logic to allow users to select items. Subhanjan establsihed the connection to the cart table in the database, enabling the Create functionality where order data (product, quantity, subtotal) is saved permanently upon checkout. 

• Key Files: [GitHub: menu.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/menu.php)

• Live Demo: [Shell: Menu Page](https://shell.hamk.fi/~amk1012141/ProjectWork/Codes/menu.php)


### Feature 2: Table Reservation System (Full CRUD)

This is a comprehensive management system for handling physical café bookings.

• Description: Ruhan created cart.php interface and the booking modal. This feature implements full CRUD operations.

    • Create: Customers submit reservations via the booking form.
    
    • Read: Admin views all reservations in view_booking.php
    
    • Update: Adming can reschedule bookings via edit_booking.php
    
    • Delete: Admin can cancel bookings from the database.


• Key Files: [GitHub: Cart.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/cart.php), view_booking.php, edit_booking.php (link from github)

• Live demo: [Shell: Cart Page](https://shell.hamk.fi/~amk1012141/ProjectWork/Codes/cart.php)

### Feature 3: User Authentication and Account Storage

This feature handles the security and persistence of customer identity

• Description: Created the login.php interface and the backend processing script create2.php. This system captures user creadentials and stores them in the users table (targeting the pswd column), ensuring the website is fully database-driven for user management.

• Key Files: [GitHub: Login.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/login.php) , [GitHub: create2.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/create2.php)

• Live Demo: [Shell: Sign In](https://shell.hamk.fi/~amk1012141/ProjectWork/Codes/login.php)

## Database Tables

The following tables are the part of the wb_bbcap25_6 database. Each table is managed by a specific team member's feature. 

### Table 1 (by Subhanjan): Cart

• Purpose: Stores customer order details temporarily during the checkout process.

• Key Columns: id (Primary Key), productname, price, quantity, and subtotal.

• Relatinship: Linked to the menu items to track sales data and customer orders.

### Table 2 (by Ruhan): bookatable

• Purpose: Manages the reservation schedule for the physical café space.

• Key columns: id (Primary Key), bookdate, booktime, duration, tablepreference.

• Relationship: Central to the administrative CRUD management system for scheduling.

### Table 3 (by Maheesha): users

• Purpose: Stores registered customer credentials for the login system.

• Key Colums: id (Primary Key), email, pswd.

• Relationship: Used to authenticate users befire allowing access to booking or specialized order history. 

### ENTITIY-RELATIONSHIP (ER) DIAGRAM

![Database ER Diagram](db_erdiagram.png)



## Created Forms

In this section, we document the interactive forms that allow users to communicate with our database.

### Form 1 (by Subanjan): Ordering Form

  • Form name: Product Order and Checkout

  • Linnks: [GitHub: menu.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/menu.php) and [Shell: Menu.php](https://shell.hamk.fi/~amk1012141/ProjectWork/Codes/menu.php)

  • Purpose: To capture the specific quantity of coffee or bakery items selected by the user and process the final subtotal for the database.

  • Validations Applied: JS ensured that the quantity input cannot be zero or a negative number before adding to the cart. 

  • Data Integrity: The 'Order Now' button is disabled via JS if the cart is empty to prevent blank database entries.


### Form 2 (by Ruhan): Table Booking Form

  • Form Name: Cafe reservation form

  • Links: [GitHub: cart.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/cart.php) and [Shell: cart.php](https://shell.hamk.fi/~amk1012141/ProjectWork/Codes/cart.php)

  • Purpose: To collect customer preferences for date, time, and seating location to be managed via the adminstrative CRUD system. 
  
  • Validations Applied: Required Date and Time pickers to ensure no null values are sent to the 'bookatable' table.

  •  Format Validation: The 'Date' and 'Time' input types ensures that only valid chronological data is submitted. 


  ### Form 3 (by Maheesha): User Login/Registration Form

  •  Form Name: Customer Authentication Form 

  • Links: [GitHub: login.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/login.php) and [Shell: login.php](https://shell.hamk.fi/~amk1012141/ProjectWork/Codes/login.php)

  • Purpose: To securely collect user email addresses and passwords for account creating and session management.

  • Password Length: A JS listener is applied to check that the password meets a minimum length requirement before the 'Sign Up' button becomes active.

## Created tables

In this section, we document the database structures that store our application's data and the fiels used to display them. 

### Table 1 (By Subhanjan): cart

  • Table name: cart

  • Links: [GitHub: create.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/create.php) and [Shell: View Orders](https://shell.hamk.fi/~amk1012141/ProjectWork/Codes/cart.php)

  • Description: Stores individual product orders, includign the item name, price, and calculated subtotal. It is used to track sales and customer choices.


### Table 2 (by Ruhan): bookatable

  • Table name: bookatable

  • Links: [GitHub: view_bookings.php]() and [Shell: view_bookings.php]()

  • Description: Manages the café's reservation ssytem. it records the date, time and table preferences, allowing for full admministrative CRUP control over bookings.


### Table 3 (By Maheesha): users

  • Table name: users

  • Links: [GitHub: login.php](https://github.com/subhanjanshah/Team3WebProgrammingProject/blob/main/login.php) and [Shell: login.php](https://shell.hamk.fi/~amk1012141/ProjectWork/Codes/login.php)

  • Description: Stores registered user accounts. It contains the logic for secure entry into the site and serves as the foundation for user-specific features.

## Target Audience

The website is designed for people who live or visit the local area and enjoy high-quality coffee and snacks.

Some specific group of users are: 

•	Students: They usually look for a quiet and cozy space or a place to study, work on their laptops. The ‘Book a Table’ feature is perfect for them because they can ensure they have a seat for a specific amount of time.

•	Residents and tourists: People who want to meet up for a chat or just come there for relaxing or for enjoying their morning coffee in a calm and relaxing environment. They can check the prices and see the available snacks before visiting. 

•	Coffee Lovers: Customers who care about quality drinks. They visit site to see what specific drinks are served. 

•	Busy customers: People who do not have time to call the café. They prefer to use the website, order the drink and pick it up later. 

## Visual Effect

To make the website look cool and modern, we added a Parallax Scrolling Effect. 

When the user scrolls down, the background image stays still while the content moves over it. This gives the website depth and makes it more interesting than a standard static page.

We kept the navigation bar fixed at the top so users can always find the ‘menu’ or ‘book a table’ or 'Log In' buttons easily. 

## Color Palette   

We went through a few concepts of the color psychology, and we wanted to choose these colors because they represent Coffee, warm and welcoming environment also we went through accessibility principles and checked if the background and text have enough contrast.

Here is our chosen color palette: 

•	Primary Color: Dark Coffee Brown #472717 

Usage: This is the brand color. We used it for navigation bar, footers, buttons and main headings. 
Why: It represents roasted coffee beans and gives a strong contrast against the light background. 

•	Secondary Color: Cream-Milk #FBF6F0

Usage: We used this for the text inside the navigation bar and the footer. 
Why: It is softer then pure white. It represents the milk foam on a cappuccino and looks very clear against the dark brown background. 

•	Accent Color: Mocha-Light Brown #8d6e63

Usage: We used this for the prices on the menu and for small icons. 
Why: It adds a little bit of color variation without being too bright or distracting. It connects the dark brown and the light background. 

•	Background Color: Soft White #F9F9F9

Usage: This is the background color for the menu cards and the content sections. 
Why: It makes the content look clean and modern, allowing the images of the food and coffee to stand out. 

## Team members and Individual Contributions

1.	Team Member: Subanjan Shah

Contributions: 

-	Created the index.php (Homepage) structure. 
-	Designed the navigation bar (logo, links) and the footer (contact info, social media links).
-	Implemented the Parallax Scrolling Effect on the homepage to make the background images move slowly. 
-	Wrote the ‘about us’ and ‘top selling drink’ sections.
-	Worked in the menu.php page and made sure the people can now click on the products and connected the cart.php page to the database table.

2.	Team Member: Mohammad Ruhan Zahif Akhter Ghantiwala

Contributions:

-	Created the menu.php (Menu page).
-	Designed the grid layout to display the coffee, drinks, and snacks in clean rows. 
-	Managed the project.css file. This involved choosing the color palette, fonts, and button styles. Also, added the Bootstrap in menu.php and help.php codes.
-	Selected and optimized all the images used for the coffee and bakery items.
-	Created the cart.php page and made it functional. 

3.	Team Member:  Akmeemana Madduma Acharige Maheesha Nuwangie Sumanadasa

Contributions:

-	Created the help.php (Contact page) with the contact information. 
-	Built the book a table modal (pop-up) where people can select a date and time. 
-	Built the ‘order now’ modal on the top of the menu page so that the users can select quantity and see the total price.
-	Created the login.php page and connected the page to database table to store the details.

### Joint Effort: 

-	We all worked together to fix bugs and ensure the website worked correctly. 
-	We tested the website on different screen sizes to make sure it looked good. 
-	We brainstormed the ‘CGG Café’ brand name and theme together. 
