# Online-Medical-Appointment

## Table of Contents

- [Online-Medical-Appointment](#online-medical-appointment)
  - [Table of Contents](#table-of-contents)
  - [Objectives](#objectives)
    - [Users](#users)
  - [Functional Requirements](#functional-requirements)
  - [Software Desing Specification](#software-desing-specification)
    - [Introduction](#introduction)
    - [User Interface Design](#user-interface-design)
      - [Home Page](#home-page)
      - [Login Page](#login-page)
      - [Sign up page](#sign-up-page)
    - [Database Design](#database-design)
      - [Users Table](#users-table)
      - [Medic's Table](#medics-table)

## Objectives

1  To create a database system that will store the information of the medic's, patients and the appointments
2.  To create a system that will allow users to make appointments with the medic they need to see.
3.  To create a system that will generate messagesand send to the users showing approval or denial of their appointments.
4.  To create a system that will allow the users create their accounts, log in, view and edittheir profiles.

### Users

1  Medical Officer - This users can log in to the system to check their appointments
2  Application Users - They can log in to make appointments. Get updates on their appointments.
3  Clinic - They include the medical officers working in their clinc and the time they are available.

## Functional Requirements

1  Authentication Module
  Provides the user with a text field where they can enter the username and password.
  If username and password are incorrect the user is asked to enter the correct credentials.

2  Booking Appointments Module
  Provides User with a list where they can choose the medic they want to book an appointment with.

3   Payment Module
   Provides the user with the amount they have to pay for the medic they have chosen to make an appointment with.

4   Messaging Module
   Sends users message to tell them if or not their appointments are approved or to remind them of their scheduled appointments.

## Software Desing Specification

### Introduction

This is a summarized design of an Online Medical Appointment System.

### User Interface Design

Contains sketches of the interfaces.

#### Home Page

- Navigation bar.
- Footer.
  
#### Login Page

- Form.

#### Sign up page

- Form.

- Information about the Website

### Database Design

Contains tables of the database.

#### Users Table

| Column        | Type         |
|---------------|--------------|
|First Name-----|text----------|
|Last Name------|text----------|
|ID-------------|int-----------|
|Contact--------|int-----------|
|email----------|tinytext------|

#### Medic's Table

| Column        | Type         |
|---------------|--------------|
|First Name-----|text----------|
|Last Name------|text----------|
|ID-------------|int-----------|
|Contact--------|int-----------|
|email----------|tinytext------|
