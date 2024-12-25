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

## Part 4: Advanced Arrays and Filtering

- **Goal:** Filter and display book details dynamically.
- **Concepts Covered:**
  - Multi-dimensional arrays.
  - Custom filtering with functions.
  - Dynamic HTML rendering with secure output.

### Example Code:

```php
<?php
$books = [
  [
    'name' => 'Do Androids Dream Of Electric Sheep',
    'author' => 'Philip K',
    'purchaseUrl' => 'https://google.com',
    'description' => 'A science fiction novel about androids and humanity.',
    'imageUrl' => 'https://example.com/book1.jpg'
  ],
  [
    'name' => 'The Langoliers',
    'author' => 'Stephen King',
    'purchaseUrl' => 'https://google.com',
    'description' => 'A horror novel with time travel and suspense.',
    'imageUrl' => 'https://example.com/book2.jpg'
  ]
];

function filter($items, $key, $value) {
  $filteredItems = [];
  foreach ($items as $item) {
    if ($item[$key] === $value) {
      $filteredItems[] = $item;
    }
  }
  return $filteredItems;
}

$filteredBooks = filter($books, 'author', 'Stephen King');
?>

<div class="book-list">
  <?php foreach ($filteredBooks as $book): ?>
    <div class="book-item">
      <h2><?= htmlspecialchars($book['name']); ?></h2>
      <p><strong>Author:</strong> <?= htmlspecialchars($book['author']); ?></p>
      <p><strong>Description:</strong> <?= htmlspecialchars($book['description']); ?></p>
      <img src="<?= htmlspecialchars($book['imageUrl']); ?>" alt="<?= htmlspecialchars($book['name']); ?>" />
      <a href="<?= htmlspecialchars($book['purchaseUrl']); ?>" target="_blank">Purchase</a>
    </div>
  <?php endforeach; ?>
</div>


---
```
