$users = [
  [
    'name' => 'John Doe',
    'age' => 27,
    'hasProfile' => true,
  ],
  [
    'name' => 'Aqshal Zakki',
    'age' => 18,
    'hasProfile' => false,
  ],
  [
    'name' => 'Jane Mary',
    'age' => 25,
    'hasProfile' => true,
  ],
];

// here we make the var dump even prettier
highlight_string("<?php\n\$users =\n" . var_export($users, true) . ";\n?>");
