# Vexo Compare

A collection of functions to compare vectors. Initially ported from [mljs/distance](https://github.com/mljs/distance).

## Installation

```bash
composer require vexo/compare
```

## Usage

```php
<?php

declare(strict_types=1);

use Vexo\Compare\Distance;
use Vexo\Compare\Similarity;

$one = [0.21, -0.32, 0.01];
$two = [0.42, -0.11, -0.02];

// Get the euclidean distance between vector one and two
$distance = euclidean($one, $two);

// Get the average of cosine distances between vector one and two
$similarity = Similarity\cosine($one, $two);

```
## Available functions

### Distance

- `additiveSymmetric(array $a, array $b): float`
- `avg(array $a, array $b): float`
- `bhattacharyya(array $a, array $b): float`
- `canberra(array $a, array $b): float`
- `chebyshev(array $a, array $b): float`
- `clark(array $a, array $b): float`
- `czekanowski(array $a, array $b): float`
- `dice(array $a, array $b): float`
- `divergence(array $a, array $b): float`
- `euclidean(array $a, array $b): float`
- `fidelity(array $a, array $b): float`
- `gower(array $a, array $b): float`
- `harmonicMean(array $a, array $b): float`
- `hellinger(array $a, array $b): float`
- `innerProduct(array $a, array $b): float`
- `intersection(array $a, array $b): float`
- `jaccard(array $a, array $b): float`
- `jeffreys(array $a, array $b): float`
- `jensenDifference(array $a, array $b): float`
- `jensenShannon(array $a, array $b): float`
- `kdivergence(array $a, array $b): float`
- `kulczynski(array $a, array $b): float`
- `kullbackLeibler(array $a, array $b): float`
- `kumarJohnson(array $a, array $b): float`
- `lorentzian(array $a, array $b): float`
- `manhattan(array $a, array $b): float`
- `matusita(array $a, array $b): float`
- `minkowski(array $a, array $b, float $p): float`
- `motyka(array $a, array $b): float`
- `neyman(array $a, array $b): float`
- `pearson(array $a, array $b): float`
- `probabilisticSymmetric(array $a, array $b): float`
- `ruzicka(array $a, array $b): float`
- `soergel(array $a, array $b): float`
- `sorensen(array $a, array $b): float`
- `squared(array $a, array $b): float`
- `squaredChord(array $a, array $b): float`
- `taneja(array $a, array $b): float`
- `tanimoto(array $a, array $b, bool $bitvector = false): float`
- `topsoe(array $a, array $b): float`
- `waveHedges(array $a, array $b): float`

### Similarity

- `cosine(array $a, array $b): float`
- `czekanowski(array $a, array $b): float`
- `dice(array $a, array $b): float`
- `intersection(array $a, array $b): float`
- `kulczynski(array $a, array $b): float`
- `kumarHassebrook(array $a, array $b): float`
- `motyka(array $a, array $b): float`
- `pearson(array $a, array $b): float`
- `squaredChord(array $a, array $b): float`
- `tanimoto(array $a, array $b, bool $bitvector = false): float`
