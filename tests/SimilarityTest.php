<?php

declare(strict_types=1);

use Vexo\Compare\Distance;
use Vexo\Compare\Similarity;

it('produces correct cosine similarity', function (): void {
    expect(Similarity\cosine([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toEqualWithDelta(1, 0.00001);
    expect(Similarity\cosine([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.8951435925492909);
})->covers('Vexo\Compare\Similarity\cosine');

it('produces correct czekanowski similarity', function (): void {
    expect(Similarity\czekanowski([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.7999999999999999);
    expect(Similarity\czekanowski([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(1 - Distance\sorensen([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]), 0.00001);
})->covers('Vexo\Compare\Similarity\czekanowski');

it('produces zero czekanowski similarity with equal vectors', function (): void {
    expect(Similarity\czekanowski([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(1.0);
})->covers('Vexo\Compare\Similarity\czekanowski');

it('produces correct dice similarity', function (): void {
    expect(Similarity\dice([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(50 / 56);
})->covers('Vexo\Compare\Similarity\dice');

it('produces correct intersection similarity', function (): void {
    expect(Similarity\intersection([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.8, 0.0001);
    expect(Similarity\intersection([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(1 - Distance\manhattan([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]) / 2, 0.0001);
})->covers('Vexo\Compare\Similarity\intersection');

it('produces zero intersection similarity with equal vectors', function (): void {
    expect(Similarity\intersection([0.3, 0.2, 0.3, 0.2], [0.3, 0.2, 0.3, 0.2]))->toBe(1.0);
})->covers('Vexo\Compare\Similarity\intersection');

it('produces correct kulczynski similarity', function (): void {
    expect(Similarity\kulczynski([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(1.9999999999999996);
})->covers('Vexo\Compare\Similarity\kulczynski');

it('produces correct kumar hassebrook similarity', function (): void {
    expect(Similarity\kumarHassebrook([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(1.0);
    expect(Similarity\kumarHassebrook([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.8064516129032256);
})->covers('Vexo\Compare\Similarity\kumarHassebrook');

it('produces correct motyka similarity', function (): void {
    expect(Similarity\motyka([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.4, 0.001);
})->covers('Vexo\Compare\Similarity\motyka');

it('produces zero motyka similarity with equal vectors', function (): void {
    expect(Similarity\motyka([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(0.5);
})->covers('Vexo\Compare\Similarity\motyka');

it('produces correct pearson correlation', function (): void {
    expect(Similarity\pearson([0, 1, 2, 3], [0, 1, 2, 3]))->toEqualWithDelta(1, 0.00000001);
    expect(Similarity\pearson([0, 1, 2, 3], [0, 1, 2, 1]))->toEqualWithDelta(0.6324555320336759, 0.00000001);
})->covers('Vexo\Compare\Similarity\pearson');

it('produces correct squared chord similarity', function (): void {
    expect(Similarity\squaredChord([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.9384260859804927);
})->covers('Vexo\Compare\Similarity\squaredChord');

it('produces correct tanimoto similarity', function (): void {
    expect(Similarity\tanimoto([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.666, 0.01);
    expect(Similarity\tanimoto([1, 0, 1], [1, 1, 1], true))->toEqualWithDelta(0.666, 0.01);
})->covers('Vexo\Compare\Similarity\tanimoto');

it('produces zero tanimoto similarity with equal vectors', function (): void {
    expect(Similarity\tanimoto([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(1.0);
    expect(Similarity\tanimoto([1, 0, 1], [1, 0, 1], true))->toBe(1.0);
})->covers('Vexo\Compare\Similarity\tanimoto');

it('produces one tanimoto similarity with empty vectors', function (): void {
    expect(Similarity\tanimoto([0, 0, 0], [0, 0, 0], true))->toBe(1.0);
})->covers('Vexo\Compare\Similarity\tanimoto');
