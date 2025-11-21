<?php
/**
 * @template T
 */
class Repository {
    /** @var T[] */
    private array $items = [];

    /** @param T $item */
    public function add($item): void {
        $this->items[] = $item;
    }

    /** @return T[] */
    public function getAll(): array {
        return $this->items;
    }
}
