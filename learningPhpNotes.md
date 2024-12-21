# Learning Notes: PHP Basics

## Part 1: Greeting

- **Goal:** Display a greeting message.
- **Concepts Covered:**
  - Declaring PHP variables.
  - Using `echo` to output text.
  - Concatenating strings with the `.` operator.

### Example Code:

```php
$greeting = "Hello";
echo "$greeting" . " " . "World";
```

---

## Part 2: Conditional Statements

- **Goal:** Display a message based on whether a book has been read.
- **Concepts Covered:**
  - Using `if-else` statements to conditionally assign values.
  - Embedding PHP variables into strings.

### Example Code:

```php
$name = "Dark Matter";
$read = true;
$message;

if ($read) {
  $message = "You have read $name";
} else {
  $message = "You didn't read $name";
}

echo $message;
```

---

## Part 3: Arrays and Loops

- **Goal:** Display a list of recommended books.
- **Concepts Covered:**
  - Defining an array with multiple values.
  - Iterating over an array with a `foreach` loop.
  - Generating HTML dynamically using PHP.

### Example Code:

```php
  <?php
  $books = [
    "Do Androids Dream Of Electric Sheep",
    "The Langoliers",
    "Hail Mary"
  ];
  ?>

  <ul>
    <?php foreach ($books as $book) : ?>
      <li> <?= $book; ?> </li>
    <?php endforeach; ?>
  </ul>
```

---

## Part 4: Arrays and Loops

- **Goal:** Display a list of recommended books.
- **Concepts Covered:**
  - Defining an array with multiple values.
  - Iterating over an array with a `foreach` loop.
  - Generating HTML dynamically using PHP.

### Example Code:

```php
<?php
$books = [
  [
    'name' => 'Do Androids Dream Of Electric Sheep',
    'author' => 'Philip K. Dick',
    'purchaseUrl' => 'https://google.com'
  ],
  [
    'name' => 'The Langoliers',
    'author' => 'Stephen King',
    'purchaseUrl' => 'https://google.com'
  ]
];
?>

<ul>
  <?php foreach ($books as $book): ?>
    <li>
      <h2><?= htmlspecialchars($book['name']); ?></h2>
      <b><?= htmlspecialchars($book['author']); ?></b>
      <a href="<?= htmlspecialchars($book['purchaseUrl']); ?>" target="_blank">Go</a>
    </li>
  <?php endforeach; ?>
</ul>
```

---
