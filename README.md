# phpstan-knp-doctrine-behaviors-bug

Bug reproduction with PHP8, [knplabs/doctrine-behaviors](https://github.com/KnpLabs/DoctrineBehaviors) and `__toString` method

- Install project with `composer install`
- Run phpstan with command `php vendor/bin/phpstan`
- You can comment/uncomment method `__toString` in [Article](https://github.com/RomulusED69/phpstan-knp-doctrine-behaviors-bug/blob/10ac6ab5368c807ac81ea8f6b848f00fa6d7030d/src/Entity/Article.php#L31)
