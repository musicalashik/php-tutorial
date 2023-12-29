# oop guideline

Object-Oriented Programming (OOP) in PHP is a powerful way to manage complex codebases, making them more modular, reusable, and maintainable. Below are real-life use cases for OOP concepts including access modifiers, inheritance, abstract classes, interfaces, and traits, along with examples and explanations.

### 1\. Access Modifiers

**Use Case**: Building a user management system.

In a user management system, you might have properties and methods that should not be directly accessible from outside the class to prevent unauthorized changes.

```php
<?php

class User {
    private $username;
    private $email;
    private $passwordHash;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }

    // Public method to get username
    public function getUsername() {
        return $this->username;
    }

    // Method to change password
    public function changePassword($oldPassword, $newPassword) {
        if (password_verify($oldPassword, $this->passwordHash)) {
            $this->passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
            return true;
        }
        return false;
    }
}
?>
```

### 2\. Inheritance

**Use Case**: Extending functionality in an e-commerce platform.

In an e-commerce application, you can have a base `Product` class and extend it for different product categories.

```php
<?php

class Product {
    protected $price;
    protected $sku;

    public function __construct($sku, $price) {
        $this->sku = $sku;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
}

class DigitalProduct extends Product {
    private $downloadLink;

    public function __construct($sku, $price, $downloadLink) {
        parent::__construct($sku, $price);
        $this->downloadLink = $downloadLink;
    }

    public function getDownloadLink() {
        return $this->downloadLink;
    }
}

class PhysicalProduct extends Product {
    private $weight;

    public function __construct($sku, $price, $weight) {
        parent::__construct($sku, $price);
        $this->weight = $weight;
    }

    public function getShippingCost() {
        return $this->weight * 0.1; // Simple shipping cost calculation
    }
}

```

### 3\. Abstract Classes

**Use Case**: Defining a template for payment gateways.

In a payment system, you might define an abstract class to outline the structure of payment gateways.

```php
<?php

abstract class PaymentGateway {
    protected $apiKey;

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }

    abstract public function processPayment($amount);
    abstract public function verifyTransaction($transactionId);
}

class StripePaymentGateway extends PaymentGateway {
    public function processPayment($amount) {
        // Use Stripe's API to process the payment
    }

    public function verifyTransaction($transactionId) {
        // Use Stripe's API to verify the transaction
    }
}

class PaypalPaymentGateway extends PaymentGateway {
    public function processPayment($amount) {
        // Use PayPal's API to process the payment
    }

    public function verifyTransaction($transactionId) {
        // Use PayPal's API to verify the transaction
    }
}

?>

```

### 4\. Interfaces

**Use Case**: Standardizing behavior for loggable actions.

If you have a system that logs different types of events, an interface ensures that each loggable action implements a method to describe itself for the logs.

```php
<?php

interface Loggable {
    public function logString();
}

class UserLoginEvent implements Loggable {
    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function logString() {
        return "User {$this->username} logged in.";
    }
}

class DataExportEvent implements Loggable {
    private $exportId;

    public function __construct($exportId) {
        $this->exportId = $exportId;
    }

    public function logString() {
        return "Data export {$this->exportId} initiated.";
    }
}

function logEvent(Loggable $event) {
    $logEntry = $event->logString();
    // Write $logEntry to log
}


```

### 5\. Traits

**Use Case**: Sharing methods across classes in a content management system.

Traits can be used in a CMS to provide common functionality like timestamping (created and updated times) to various unrelated classes.

```php

<?php
trait Timestampable {
    private $createdAt;
    private $updatedAt;

    public function updateTimestamps() {
        $this->updatedAt = date('Y-m-d H:i:s');
        if (!isset($this->createdAt)) {
            $this->createdAt = $this->updatedAt;
        }
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

class Article {
    use Timestampable;

    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->updateTimestamps();
    }
}

class Comment {
    use Timestampable;

    private $author;
    private $message;

    public function __construct($author, $message) {
        $this->author = $author;
        $this->message = $message;
        $this->updateTimestamps();
    }
}


```

By using these OOP concepts, you can write code that is more organized and easier to understand, test, and maintain. Each concept serves a specific purpose, and when combined, they can be used to build robust systems in PHP.