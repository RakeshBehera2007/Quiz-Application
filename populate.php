<?php
include 'config.php';

$categories = [
    'Technical',
    'General Knowledge',
    'Science',
    'History',
    'Math',
    'C Programming',
    'C++ Programming',
    'Java Programming',
    'Python Programming',
    'JavaScript Programming',
    'Data Structures & Algorithms',
    'Operating Systems'
];

$templates = [
    'Technical' => [
        ['q' => 'Which tool is commonly used in technology for question {idx}?', 'options' => ['Compiler', 'Hammer', 'Marker', 'Paper'], 'answer' => 'Compiler'],
        ['q' => 'What does the cloud provide in question {idx}?', 'options' => ['Remote servers', 'Local disk', 'Printer access', 'Keyboard settings'], 'answer' => 'Remote servers'],
        ['q' => 'Which protocol is used for secure web access in question {idx}?', 'options' => ['HTTPS', 'FTP', 'SMTP', 'POP3'], 'answer' => 'HTTPS'],
        ['q' => 'What is an API in question {idx}?', 'options' => ['Application interface', 'Paper interface', 'Audio interface', 'Array interface'], 'answer' => 'Application interface'],
        ['q' => 'Which system manages code changes in question {idx}?', 'options' => ['Git', 'Excel', 'Photoshop', 'Word'], 'answer' => 'Git'],
        ['q' => 'Which device connects to the internet in question {idx}?', 'options' => ['Router', 'Oven', 'Chair', 'Pencil'], 'answer' => 'Router'],
        ['q' => 'Which language is not a markup language in question {idx}?', 'options' => ['Python', 'HTML', 'XML', 'Markdown'], 'answer' => 'Python'],
        ['q' => 'What does CSS control in question {idx}?', 'options' => ['Style', 'Data', 'Logic', 'Security'], 'answer' => 'Style'],
        ['q' => 'Which term describes remote software delivery in question {idx}?', 'options' => ['Cloud computing', 'Local hosting', 'Text editing', 'File printing'], 'answer' => 'Cloud computing'],
        ['q' => 'Which framework is for frontend UI in question {idx}?', 'options' => ['React', 'Django', 'MySQL', 'Docker'], 'answer' => 'React'],
    ],
    'General Knowledge' => [
        ['q' => 'Which country is described in question {idx}?', 'options' => ['Japan', 'China', 'Brazil', 'Spain'], 'answer' => 'Japan'],
        ['q' => 'What city is the capital of France in question {idx}?', 'options' => ['Paris', 'Berlin', 'Rome', 'Madrid'], 'answer' => 'Paris'],
        ['q' => 'Which planet is largest in question {idx}?', 'options' => ['Jupiter', 'Mars', 'Earth', 'Venus'], 'answer' => 'Jupiter'],
        ['q' => 'What currency is used in Japan in question {idx}?', 'options' => ['Yen', 'Dollar', 'Rupee', 'Euro'], 'answer' => 'Yen'],
        ['q' => 'Who painted the Mona Lisa in question {idx}?', 'options' => ['Leonardo da Vinci', 'Pablo Picasso', 'Vincent van Gogh', 'Claude Monet'], 'answer' => 'Leonardo da Vinci'],
        ['q' => 'Which author wrote in question {idx}?', 'options' => ['William Shakespeare', 'Charles Dickens', 'Jane Austen', 'Mark Twain'], 'answer' => 'William Shakespeare'],
        ['q' => 'Which is the largest ocean in question {idx}?', 'options' => ['Pacific', 'Atlantic', 'Indian', 'Arctic'], 'answer' => 'Pacific'],
        ['q' => 'Which is the smallest country in question {idx}?', 'options' => ['Vatican City', 'Monaco', 'Nauru', 'San Marino'], 'answer' => 'Vatican City'],
        ['q' => 'Which sport uses a shuttlecock in question {idx}?', 'options' => ['Badminton', 'Tennis', 'Cricket', 'Soccer'], 'answer' => 'Badminton'],
        ['q' => 'What instrument has 88 keys in question {idx}?', 'options' => ['Piano', 'Guitar', 'Violin', 'Flute'], 'answer' => 'Piano'],
    ],
    'Science' => [
        ['q' => 'What is the formula for water in question {idx}?', 'options' => ['H2O', 'CO2', 'O2', 'NaCl'], 'answer' => 'H2O'],
        ['q' => 'What planet is known as the Red Planet in question {idx}?', 'options' => ['Mars', 'Venus', 'Saturn', 'Mercury'], 'answer' => 'Mars'],
        ['q' => 'What is the force pulling objects to Earth in question {idx}?', 'options' => ['Gravity', 'Magnetism', 'Friction', 'Tension'], 'answer' => 'Gravity'],
        ['q' => 'What is the powerhouse of the cell in question {idx}?', 'options' => ['Mitochondria', 'Nucleus', 'Ribosome', 'Chloroplast'], 'answer' => 'Mitochondria'],
        ['q' => 'What gas do plants absorb in question {idx}?', 'options' => ['Carbon Dioxide', 'Oxygen', 'Nitrogen', 'Hydrogen'], 'answer' => 'Carbon Dioxide'],
        ['q' => 'What is the atomic number of carbon in question {idx}?', 'options' => ['6', '8', '12', '4'], 'answer' => '6'],
        ['q' => 'What is the boiling point of water in Celsius in question {idx}?', 'options' => ['100°C', '0°C', '50°C', '200°C'], 'answer' => '100°C'],
        ['q' => 'Which element is symbol Fe in question {idx}?', 'options' => ['Iron', 'Gold', 'Silver', 'Copper'], 'answer' => 'Iron'],
        ['q' => 'What do plants use to make food in question {idx}?', 'options' => ['Sunlight', 'Water only', 'Soil', 'Air only'], 'answer' => 'Sunlight'],
        ['q' => 'What state of matter is water vapor in question {idx}?', 'options' => ['Gas', 'Liquid', 'Solid', 'Plasma'], 'answer' => 'Gas'],
    ],
    'History' => [
        ['q' => 'When did Columbus discover America in question {idx}?', 'options' => ['1492', '1500', '1485', '1498'], 'answer' => '1492'],
        ['q' => 'Who was emperor of Rome in question {idx}?', 'options' => ['Augustus', 'Nero', 'Julius Caesar', 'Constantine'], 'answer' => 'Augustus'],
        ['q' => 'What year did WWII end in question {idx}?', 'options' => ['1945', '1944', '1946', '1947'], 'answer' => '1945'],
        ['q' => 'Which wall fell in 1989 in question {idx}?', 'options' => ['Berlin Wall', 'Great Wall', 'Hadrian Wall', 'Western Wall'], 'answer' => 'Berlin Wall'],
        ['q' => 'Who flew solo across the Atlantic in question {idx}?', 'options' => ['Amelia Earhart', 'Harriet Quimby', 'Bessie Coleman', 'Jacqueline Cochran'], 'answer' => 'Amelia Earhart'],
        ['q' => 'Who led India to independence in question {idx}?', 'options' => ['Mahatma Gandhi', 'Jawaharlal Nehru', 'Subhas Chandra Bose', 'Sardar Patel'], 'answer' => 'Mahatma Gandhi'],
        ['q' => 'What was founded in 1945 in question {idx}?', 'options' => ['United Nations', 'NATO', 'EU', 'ASEAN'], 'answer' => 'United Nations'],
        ['q' => 'What was the medieval period also called in question {idx}?', 'options' => ['Middle Ages', 'Renaissance', 'Industrial Age', 'Modern Era'], 'answer' => 'Middle Ages'],
        ['q' => 'Who wrote the Declaration of Independence in question {idx}?', 'options' => ['Thomas Jefferson', 'George Washington', 'John Adams', 'Benjamin Franklin'], 'answer' => 'Thomas Jefferson'],
        ['q' => 'Which ancient civilization built pyramids in question {idx}?', 'options' => ['Egyptians', 'Greeks', 'Romans', 'Mayans'], 'answer' => 'Egyptians'],
    ],
    'Math' => [
        ['q' => 'What is {idx} plus 5 in question {idx}?', 'options' => ['{idx+5}', '{idx+4}', '{idx+3}', '{idx+6}'], 'answer' => '{idx+5}'],
        ['q' => 'What is {idx} times 2 in question {idx}?', 'options' => ['{idx*2}', '{idx*2+1}', '{idx*2-1}', '{idx*2+2}'], 'answer' => '{idx*2}'],
        ['q' => 'What is the square of {idx} in question {idx}?', 'options' => ['{idx*idx}', '{idx*idx+1}', '{idx*idx-1}', '{idx*idx+2}'], 'answer' => '{idx*idx}'],
        ['q' => 'What is half of {idx} in question {idx}?', 'options' => ['{idx/2}', '{idx/2}', '{idx/2+1}', '{idx}'], 'answer' => '{idx/2}'],
        ['q' => 'What is 10 percent of {idx} in question {idx}?', 'options' => ['{idx/10}', '{idx/5}', '{idx/2}', '{idx}'], 'answer' => '{idx/10}'],
        ['q' => 'Which shape has 4 equal sides in question {idx}?', 'options' => ['Square', 'Rectangle', 'Triangle', 'Circle'], 'answer' => 'Square'],
        ['q' => 'What is 9 + 9 in question {idx}?', 'options' => ['18', '17', '16', '19'], 'answer' => '18'],
        ['q' => 'Which number is prime in question {idx}?', 'options' => ['11', '12', '14', '15'], 'answer' => '11'],
        ['q' => 'What is the perimeter of a 3,4,5 triangle in question {idx}?', 'options' => ['12', '11', '13', '10'], 'answer' => '12'],
        ['q' => 'What is 50% of 200 in question {idx}?', 'options' => ['100', '90', '80', '75'], 'answer' => '100'],
    ],
    'C Programming' => [
        ['q' => 'Which header is used for printf in question {idx}?', 'options' => ['<stdio.h>', '<stdlib.h>', '<string.h>', '<math.h>'], 'answer' => '<stdio.h>'],
        ['q' => 'What symbol ends a statement in C in question {idx}?', 'options' => [';', ':', ',', '.'], 'answer' => ';'],
        ['q' => 'Which loop repeats until condition is false in question {idx}?', 'options' => ['for', 'while', 'do-while', 'if'], 'answer' => 'while'],
        ['q' => 'What does malloc return in question {idx}?', 'options' => ['Pointer', 'Integer', 'Char', 'Float'], 'answer' => 'Pointer'],
        ['q' => 'Which operator is for assignment in question {idx}?', 'options' => ['=', '==', '!=', '++'], 'answer' => '='],
        ['q' => 'How to comment a line in C in question {idx}?', 'options' => ['//', '/*', '#', '--'], 'answer' => '//'],
        ['q' => 'What is the type for a character in C in question {idx}?', 'options' => ['char', 'int', 'float', 'double'], 'answer' => 'char'],
        ['q' => 'Which keyword declares a function in C in question {idx}?', 'options' => ['int', 'function', 'def', 'func'], 'answer' => 'int'],
        ['q' => 'What is a pointer in question {idx}?', 'options' => ['Memory address', 'Function', 'Loop', 'Variable'], 'answer' => 'Memory address'],
        ['q' => 'Which function reads formatted input in C in question {idx}?', 'options' => ['scanf()', 'printf()', 'gets()', 'puts()'], 'answer' => 'scanf()'],
    ],
    'C++ Programming' => [
        ['q' => 'Which keyword defines a class in C++ in question {idx}?', 'options' => ['class', 'struct', 'object', 'namespace'], 'answer' => 'class'],
        ['q' => 'What does cout do in question {idx}?', 'options' => ['Output', 'Input', 'Compute', 'Store'], 'answer' => 'Output'],
        ['q' => 'Which symbol is scope resolution in question {idx}?', 'options' => ['::', '->', '.', '=='], 'answer' => '::'],
        ['q' => 'What is a constructor in question {idx}?', 'options' => ['Initializer', 'Destructor', 'Pointer', 'Variable'], 'answer' => 'Initializer'],
        ['q' => 'Which header is used for IO in question {idx}?', 'options' => ['<iostream>', '<stdio.h>', '<math.h>', '<string.h>'], 'answer' => '<iostream>'],
        ['q' => 'What is inheritance in question {idx}?', 'options' => ['Reuse code', 'Delete code', 'Store data', 'Print output'], 'answer' => 'Reuse code'],
        ['q' => 'What is polymorphism in question {idx}?', 'options' => ['Many forms', 'One form', 'No forms', 'Static type'], 'answer' => 'Many forms'],
        ['q' => 'Which function is virtual in question {idx}?', 'options' => ['virtual void', 'int main', 'static void', 'char func'], 'answer' => 'virtual void'],
        ['q' => 'What does new operator do in question {idx}?', 'options' => ['Allocate memory', 'Free memory', 'Declare variable', 'Define functions'], 'answer' => 'Allocate memory'],
        ['q' => 'What is a destructor in question {idx}?', 'options' => ['Cleans up', 'Initializes', 'Types data', 'Defines class'], 'answer' => 'Cleans up'],
    ],
    'Java Programming' => [
        ['q' => 'Which keyword creates a new object in question {idx}?', 'options' => ['new', 'create', 'make', 'do'], 'answer' => 'new'],
        ['q' => 'What is the JVM in question {idx}?', 'options' => ['Java Virtual Machine', 'Java Version Manager', 'Java Variable Model', 'Java Visual Module'], 'answer' => 'Java Virtual Machine'],
        ['q' => 'Which keyword prevents inheritance in question {idx}?', 'options' => ['final', 'static', 'public', 'private'], 'answer' => 'final'],
        ['q' => 'What is the default value of boolean in question {idx}?', 'options' => ['true', 'false', 'null', '0'], 'answer' => 'false'],
        ['q' => 'What does public mean in question {idx}?', 'options' => ['Accessible everywhere', 'Private access', 'Protected access', 'Package only'], 'answer' => 'Accessible everywhere'],
        ['q' => 'Which collection is synchronized in question {idx}?', 'options' => ['Vector', 'ArrayList', 'HashSet', 'LinkedList'], 'answer' => 'Vector'],
        ['q' => 'Which method runs first in question {idx}?', 'options' => ['main()', 'start()', 'init()', 'run()'], 'answer' => 'main()'],
        ['q' => 'What is an interface in question {idx}?', 'options' => ['Blueprint for classes', 'Concrete class', 'Data type', 'Exception'], 'answer' => 'Blueprint for classes'],
        ['q' => 'How do you print in Java in question {idx}?', 'options' => ['System.out.println()', 'print()', 'echo()', 'console.log()'], 'answer' => 'System.out.println()'],
        ['q' => 'What does static mean in question {idx}?', 'options' => ['Class level', 'Instance level', 'Temporary', 'Dynamic'], 'answer' => 'Class level'],
    ],
    'Python Programming' => [
        ['q' => 'Which keyword defines a function in question {idx}?', 'options' => ['def', 'function', 'func', 'define'], 'answer' => 'def'],
        ['q' => 'How do you print in Python in question {idx}?', 'options' => ['print()', 'echo()', 'printf()', 'cout'], 'answer' => 'print()'],
        ['q' => 'What is the list type in question {idx}?', 'options' => ['Mutable', 'Immutable', 'Static', 'Fixed'], 'answer' => 'Mutable'],
        ['q' => 'Which symbol starts a comment in question {idx}?', 'options' => ['#', '//', '/*', '<!--'], 'answer' => '#'],
        ['q' => 'What is the return type of len() in question {idx}?', 'options' => ['int', 'str', 'float', 'bool'], 'answer' => 'int'],
        ['q' => 'What does .append() do in question {idx}?', 'options' => ['Adds to list', 'Removes from list', 'Sorts list', 'Checks list'], 'answer' => 'Adds to list'],
        ['q' => 'What is a tuple in question {idx}?', 'options' => ['Immutable list', 'Mutable list', 'Dictionary', 'Set'], 'answer' => 'Immutable list'],
        ['q' => 'What does import do in question {idx}?', 'options' => ['Load module', 'Save file', 'Delete code', 'Compile program'], 'answer' => 'Load module'],
        ['q' => 'Which is a dictionary in question {idx}?', 'options' => ['{ }', '[ ]', '( )', '< >'], 'answer' => '{ }'],
        ['q' => 'What keyword handles exceptions in question {idx}?', 'options' => ['try', 'catch', 'except', 'finally'], 'answer' => 'try'],
    ],
    'JavaScript Programming' => [
        ['q' => 'Which keyword declares a constant in JS in question {idx}?', 'options' => ['const', 'let', 'var', 'static'], 'answer' => 'const'],
        ['q' => 'What does DOM stand for in question {idx}?', 'options' => ['Document Object Model', 'Data Object Model', 'Dynamic Object Material', 'Display Object Machine'], 'answer' => 'Document Object Model'],
        ['q' => 'Which method parses JSON in question {idx}?', 'options' => ['JSON.parse()', 'JSON.stringify()', 'JSON.decode()', 'JSON.load()'], 'answer' => 'JSON.parse()'],
        ['q' => 'What is an arrow function in question {idx}?', 'options' => ['Shorter function syntax', 'Loop type', 'Object type', 'Array type'], 'answer' => 'Shorter function syntax'],
        ['q' => 'What does === compare in question {idx}?', 'options' => ['Value and type', 'Value only', 'Type only', 'Reference only'], 'answer' => 'Value and type'],
        ['q' => 'Which is a block-scoped declaration in question {idx}?', 'options' => ['let', 'var', 'function', 'const'], 'answer' => 'let'],
        ['q' => 'How do you add an event listener in question {idx}?', 'options' => ['addEventListener()', 'onclick()', 'listen()', 'attachEvent()'], 'answer' => 'addEventListener()'],
        ['q' => 'What is NaN in question {idx}?', 'options' => ['Not a Number', 'Null', 'NaN', 'Undefined'], 'answer' => 'Not a Number'],
        ['q' => 'Which method adds an element to end of array in question {idx}?', 'options' => ['push()', 'pop()', 'shift()', 'unshift()'], 'answer' => 'push()'],
        ['q' => 'What does typeof return in question {idx}?', 'options' => ['Data type', 'Value', 'Size', 'Format'], 'answer' => 'Data type'],
    ],
    'Data Structures & Algorithms' => [
        ['q' => 'What is the time complexity of binary search in question {idx}?', 'options' => ['O(log n)', 'O(n)', 'O(n^2)', 'O(1)'], 'answer' => 'O(log n)'],
        ['q' => 'Which structure uses LIFO in question {idx}?', 'options' => ['Stack', 'Queue', 'Tree', 'Graph'], 'answer' => 'Stack'],
        ['q' => 'What is a linked list in question {idx}?', 'options' => ['Series of nodes', 'Array', 'Hash map', 'Tree'], 'answer' => 'Series of nodes'],
        ['q' => 'What is DFS in question {idx}?', 'options' => ['Depth First Search', 'Breadth First Search', 'Direct File Search', 'Dynamic File System'], 'answer' => 'Depth First Search'],
        ['q' => 'What is a hash collision in question {idx}?', 'options' => ['Same hash for different keys', 'Different hash for same key', 'No hash', 'Wrong key'], 'answer' => 'Same hash for different keys'],
        ['q' => 'Which sorting is stable in question {idx}?', 'options' => ['Merge sort', 'Quick sort', 'Heap sort', 'Selection sort'], 'answer' => 'Merge sort'],
        ['q' => 'What is the space complexity of merge sort in question {idx}?', 'options' => ['O(n)', 'O(1)', 'O(log n)', 'O(n^2)'], 'answer' => 'O(n)'],
        ['q' => 'Which traversal visits root first in question {idx}?', 'options' => ['Preorder', 'Inorder', 'Postorder', 'Level order'], 'answer' => 'Preorder'],
        ['q' => 'What is a binary tree in question {idx}?', 'options' => ['Tree with max two children', 'List of numbers', 'Hash table', 'Queue'], 'answer' => 'Tree with max two children'],
        ['q' => 'What is a queue used for in question {idx}?', 'options' => ['FIFO ordering', 'LIFO ordering', 'Sorting', 'Searching'], 'answer' => 'FIFO ordering'],
    ],
    'Operating Systems' => [
        ['q' => 'What is a process in question {idx}?', 'options' => ['Program in execution', 'Stored file', 'User account', 'Network device'], 'answer' => 'Program in execution'],
        ['q' => 'Which memory is fastest in question {idx}?', 'options' => ['Cache', 'RAM', 'Disk', 'SSD'], 'answer' => 'Cache'],
        ['q' => 'What does virtual memory do in question {idx}?', 'options' => ['Uses disk as RAM', 'Increases CPU speed', 'Stores graphics', 'Manages users'], 'answer' => 'Uses disk as RAM'],
        ['q' => 'What is a semaphore in question {idx}?', 'options' => ['Synchronization tool', 'File system', 'Network protocol', 'Display driver'], 'answer' => 'Synchronization tool'],
        ['q' => 'What is deadlock in question {idx}?', 'options' => ['Processes waiting forever', 'Fast processing', 'Memory overflow', 'Disk full'], 'answer' => 'Processes waiting forever'],
        ['q' => 'What is the kernel in question {idx}?', 'options' => ['Core of OS', 'Application', 'User interface', 'Database'], 'answer' => 'Core of OS'],
        ['q' => 'What is a page fault in question {idx}?', 'options' => ['Request for missing page in memory', 'Disk error', 'CPU fault', 'I/O error'], 'answer' => 'Request for missing page in memory'],
        ['q' => 'What is context switching in question {idx}?', 'options' => ['Switching CPU between processes', 'Switching monitors', 'Switching files', 'Switching users'], 'answer' => 'Switching CPU between processes'],
        ['q' => 'What is multitasking in question {idx}?', 'options' => ['Running multiple tasks', 'Running one task', 'Stopping tasks', 'Sleeping tasks'], 'answer' => 'Running multiple tasks'],
        ['q' => 'What is a file system in question {idx}?', 'options' => ['Method to store files', 'Network protocol', 'Process scheduler', 'Memory manager'], 'answer' => 'Method to store files'],
    ],
];

foreach ($categories as $category) {
    // Get current count
    $stmt = $conn->prepare("SELECT COUNT(*) as count FROM questions WHERE category = ?");
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $current_count = $row['count'];
    $stmt->close();

    $needed = 100 - $current_count;
    if ($needed <= 0) continue;

    $start = $current_count + 1;
    $tpls = $templates[$category];
    $tpl_count = count($tpls);

    for ($i = 0; $i < $needed; $i++) {
        $idx = $start + $i;
        $tpl = $tpls[$i % $tpl_count];
        $question = str_replace('{idx}', $idx, $tpl['q']);
        $options = $tpl['options'];
        // For Math, replace {idx+5} etc.
        if ($category == 'Math') {
            $question = preg_replace_callback('/\{([^}]+)\}/', function($matches) use ($idx) {
                $expr = str_replace('idx', $idx, $matches[1]);
                return eval("return $expr;");
            }, $question);
            $options = array_map(function($opt) use ($idx) {
                return preg_replace_callback('/\{([^}]+)\}/', function($matches) use ($idx) {
                    $expr = str_replace('idx', $idx, $matches[1]);
                    return eval("return $expr;");
                }, $opt);
            }, $options);
            $answer = preg_replace_callback('/\{([^}]+)\}/', function($matches) use ($idx) {
                $expr = str_replace('idx', $idx, $matches[1]);
                return eval("return $expr;");
            }, $tpl['answer']);
        } else {
            $answer = $tpl['answer'];
        }

        $stmt = $conn->prepare("INSERT INTO questions (category, question, option1, option2, option3, option4, correct_answer) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $category, $question, $options[0], $options[1], $options[2], $options[3], $answer);
        $stmt->execute();
        $stmt->close();
    }
}

echo "Questions populated successfully.";
?>