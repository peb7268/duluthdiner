<?php

require 'recipe/wordpress.php';

server('prod', 'duluthdiner.com', 22)
->user('reloboxc')
->password('Invest1994!')
->stage('production')
->env('deploy_path', '/home5/reloboxc/public_html/storage53.com/wp-content/themes'); // Define the base path to deploy your project to.

set('repository', 'https://github.com/peb7268/duluthdiner.git');