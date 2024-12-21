<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Demo</title>
</head>
<style>
  body {
    display: grid;
    place-items: center;
    place-content: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;
  }
</style>

<body>


  <!-- part-4 -->

  <?php
  $books = [
    [
      'name' => 'Do Androids Dream Of Electric Sheep',
      'author' => 'Philip K. Dick',
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
  ?>

  <div class="book-list">
    <?php foreach ($books as $book): ?>
      <div class="book-item">
        <h2><?= htmlspecialchars($book['name']); ?></h2>
        <p><strong>Author:</strong> <?= htmlspecialchars($book['author']); ?></p>
        <p><strong>Description:</strong> <?= htmlspecialchars($book['description']); ?></p>
        <img src="<?= htmlspecialchars($book['imageUrl']); ?>" alt="<?= htmlspecialchars($book['name']); ?>" />
        <a href="<?= htmlspecialchars($book['purchaseUrl']); ?>" target="_blank">Purchase</a>
      </div>
    <?php endforeach; ?>
  </div>

</body>

</html>