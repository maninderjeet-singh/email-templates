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
],
```

### Step 2: Require the Package via Composer

After adding the repository, run the following command to require the package:

```bash
composer require maninderjeet-singh/email-templates
```

### Step 3: Add Service Provider

After installation, you need to register the package's service provider in your Laravel application. Open the config/app.php file and add the service provider to the providers array:

```php
'providers' => [
    // Other service providers

    YourPackage\EmailTemplateServiceProvider::class,  // Add this line
],
```

### Step 4: Publish Config and Migrations

You can publish the configuration and migration files using the following Artisan commands:

```bash
php artisan vendor:publish --provider="YourPackage\EmailTemplateServiceProvider"
```
```bash
php artisan migrate
```
    
## Usage

### Creating and Managing Email Templates

Once installed, you can access the email templates management interface in your application. The interface provides the ability to create, update, and delete email templates. A real-time preview of the email will be visible on the right side when creating or updating a template.

### Sending Emails Using Templates

To send an email using a template, you need to use the provided class and method. Here's an example of how you can use it:

```php
use Maninderjeet\EmailTemplate\EmailTemplate;

$emailTemplateId = 1; // The ID of the email template
$params = [
    'name' => 'John Doe',
    'order_number' => '123456',
];
$user = User::first(); // User, to whom you want to send email.

$emailTemplateContent = EmailTemplate::templateContent($emailTemplateId, $params);
Mail::send([], [], function ($message) use ($user, $emailTemplateContent) {
            $message->to($user->email)
                    ->subject('Order Placed')
                    ->html($emailTemplateContent);
        });
```
            
- The method sendUsingTemplate() receives two parameters:
    - **$id:** The ID of the email template.
    - **$params:** An array of dynamic data that will be injected into the template.

### Example Template

If your email template has placeholders like {name} and {order_number}, these will be dynamically replaced based on the values provided in the $params array.

```html
<p>Hello {name},</p>
<p>Your order number is {order_number}.</p>
```

### Customization
You can customize the way the email templates work by modifying the configuration file that is published via vendor:publish.

### License
This package is open-source and available under the MIT License.

