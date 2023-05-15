<?php

class Node
{
    private array $children;

    public function __construct(private int              $weight,
                                private string           $name,
                                Recursion\Node           ...$node)
    {
        $this->children = $node;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function addNode(Recursion\Node $node): void
    {
        $this->children[] = $node;
    }

    public function hasChildren(): bool
    {
        return !empty($this->children);
    }
}

$nodes = [];

$node13 = new Recursion\Node(13, 'Node 13');
$node7 = new Recursion\Node(7, 'Node 7');
$node5 = new Recursion\Node(5, 'Node 5', $node13);
$node6 = new Recursion\Node(6, 'Node 6', $node7);
$node1 = new Recursion\Node(1, 'Node 1', $node6, $node5);

$nodes[] = $node1;

$node8 = new Recursion\Node(8, 'Node 8');
$node2 = new Recursion\Node(2, 'Node 2', $node8);

$nodes[] = $node2;

$node10 = new Recursion\Node(10, 'Node 10');
$node11 = new Recursion\Node(11, 'Node 11');
$node12 = new Recursion\Node(12, 'Node 12');
$node9 = new Recursion\Node(9, 'Node 9', $node10, $node11);
$node3 = new Recursion\Node(3, 'Node 3', $node9, $node12);

$nodes[] = $node3;

$node4 = new Recursion\Node(4, 'Node 4');

$nodes[] = $node4;



/**
 * @param Node $node
 * @return int
 */
function nodes_sum(Recursion\Node $node): int
{
    if (!$node->hasChildren())
        return $node->getWeight();

    $count = $node->getWeight();

    foreach ($node->getChildren() as $child) {
        $count += nodes_sum($child);
    };

    return $count;
}

/**
 * @throws Exception
 */
function sum_recursive(array $nodes): void
{
    $count = 0;

    if (!empty(array_filter($nodes, fn($key) => !($key instanceof Recursion\Node))))
        throw new Exception('Array should include only Node objects');

    foreach ($nodes as $node) {
        $count += nodes_sum($node);
    }

    echo $count;
}


try {
    sum_recursive($nodes);
} catch (Exception $e) {
    echo $e->getMessage();
}


