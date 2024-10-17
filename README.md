# Laravel Email Templates Package

A Laravel package to manage and use email templates with real-time preview functionality. This package provides a complete CRUD (Create, Read, Update, Delete) interface for email templates. Additionally, it allows you to send emails using these templates with dynamic parameters.

## Features

- **CRUD Functionality**: Manage email templates directly within your Laravel application.
- **Real-time Preview**: See a real-time preview of the email template while creating or updating.
- **Send Emails with Templates**: Use the provided class and method to send emails using the templates, with support for dynamic parameters.

## Installation

### Step 1: Add the Package to `composer.json`

To add this package, you need to update your `composer.json` file to include the repository as a version control system (VCS) package.

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/maninderjeet-singh/email-templates"
    }
]
