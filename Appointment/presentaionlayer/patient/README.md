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
      - [Book Appointment Page](#book-appointment-page)
      - [View Appointment Page](#view-appointment-page)
      - [Cancel Appointment Page](#cancel-appointment-page)
    - [Database Design](#database-design)
      - [Users Table](#users-table)
      - [Book Appointment Table](#book-appointment-table)

## Objectives

1. To create a database system that will store the information of the medic's, patients and the appointments
1. To create a system that will allow users to make appointments with the medic they need to see.
1. To create a system that allows the doctor view the patients information.
1. To create a system that will allow the users sign up, log in and make appointmnets.

### Users

1. Medical Officer - This users can log in to the system to check their appointments
2. Application Users - They can log in to book or cancle appointments.

## Functional Requirements

1. Authentication Module
  Provides the user with a text field where they can enter the username and password.
  If username and password are incorrect the user is asked to enter the correct credentials.

1. Booking Appointments Module
  Provides User with a list where they can choose the medic they want to book an appointment with.

1. Report Generation Module
   The System generates a report on every patient information like patients name, Phone number, etc.

## Software Desing Specification

### Introduction

This is a summarized design of an Online Medical Appointment System.

### User Interface Design

Contains sketches of the interfaces.

#### Home Page

![home](https://user-images.githubusercontent.com/73745167/126126134-6228c858-77d1-473d-8440-66f225076200.png)

- Navigation bar.
- Footer.
- Logo.
- Background Image.
  
#### Login Page

- Form.

#### Sign up page

- Form.
  
#### Book Appointment Page

![book](https://user-images.githubusercontent.com/73745167/126126409-9e07126e-e409-4590-a4c0-7dad29bad5e6.png)

- Form
- Logo.
- Navigation Bar.
- Footer.
- Background image.
  
#### View Appointment Page

![view](https://user-images.githubusercontent.com/73745167/126126452-a8889243-17ca-48fc-b39f-19bfaf21a032.png)

- Form.
- Logo.
- Navigation Bar.
- Footer.

#### Cancel Appointment Page

![cancel](https://user-images.githubusercontent.com/73745167/126126540-e01d64e4-18ee-482d-a5ef-ab3041539ad6.png)

- Form.
- Logo.
- Navigation Bar.
- Footer.
- Background image.

### Database Design

Contains tables of the database.

#### Users Table

| Column        | Type         |
|---------------|--------------|
|ID-------------|text----------|
|First Name-----|text----------|
|Last Name------|int-----------|
|Contact--------|int-----------|
|email----------|tinytext------|
|password-------|text----------|
|Address--------|text----------|

#### Book Appointment Table

| Column        | Type         |
|---------------|--------------|
|Appointment ID-|text----------|
|Date-----------|text----------|
|Time-----------|int-----------|
|Patient ID-----|int-----------|
|Doctor ID------|tinytext------|
