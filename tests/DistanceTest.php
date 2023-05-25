<?php

declare(strict_types=1);

use Vexo\Compare\Distance;

it('produces zero AdditiveSymmetric distance with equal vectors', function (): void {
    expect(Distance\additiveSymmetric([3, 1, 4, 6, 2], [3, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\additiveSymmetric');

it('produces correct AdditiveSymmetric distance', function (): void {
    expect(Distance\additiveSymmetric([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(40.694444, 0.00005);
})->covers('Vexo\Compare\Distance\additiveSymmetric');

it('produces zero Avg distance with equal vectors', function (): void {
    expect(Distance\avg([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\avg');

it('produces correct Avg distance', function (): void {
    expect(Distance\avg([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toBe(10.5);
})->covers('Vexo\Compare\Distance\avg');

it('produces correct Bhattacharyya distance', function (): void {
    expect(Distance\bhattacharyya([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.031270832649666964, 0.0000000001);
})->covers('Vexo\Compare\Distance\bhattacharyya');

it('produces zero Canberra distance with equal vectors', function (): void {
    expect(Distance\canberra([3, 6, 9, 4, 3], [3, 6, 9, 4, 3]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\canberra');

it('produces correct Canberra distance', function (): void {
    expect(Distance\canberra([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toBe(2.4989010989010993);
})->covers('Vexo\Compare\Distance\canberra');

it('produces zero Chebyshev distance with equal vectors', function (): void {
    expect(Distance\chebyshev([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\chebyshev');

it('produces correct Chebyshev distance', function (): void {
    expect(Distance\chebyshev([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toBe(5.0);
})->covers('Vexo\Compare\Distance\chebyshev');

it('produces zero Clark distance with equal vectors', function (): void {
    expect(Distance\clark([3, 1, 4, 6, 2], [3, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\clark');

it('produces correct Clark distance', function (): void {
    expect(Distance\clark([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(0.85914671, 0.0000001);
})->covers('Vexo\Compare\Distance\clark');

it('produces zero Czekanowski distance with equal vectors', function (): void {
    expect(Distance\czekanowski([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\czekanowski');

it('produces correct Czekanowski distance', function (): void {
    expect(Distance\czekanowski([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.20000000000000007);
    expect(Distance\czekanowski([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(Distance\sorensen([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]), 0.00001);
})->covers('Vexo\Compare\Distance\czekanowski');

it('produces zero Dice distance with equal vectors', function (): void {
    expect(Distance\dice([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\dice');

it('produces correct Dice distance', function (): void {
    expect(Distance\dice([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(6 / 56);
})->covers('Vexo\Compare\Distance\dice');

it('produces zero Divergence distance with equal vectors', function (): void {
    expect(Distance\divergence([3, 1, 4, 6, 2], [3, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\divergence');

it('produces correct Divergence distance', function (): void {
    expect(Distance\divergence([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toBe(1.4762661514309867);
})->covers('Vexo\Compare\Distance\divergence');

it('produces zero Euclidean distance with equal vectors', function (): void {
    expect(Distance\euclidean([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\euclidean');

it('produces correct Euclidean distance', function (): void {
    expect(Distance\euclidean([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toBe(8.0);
})->covers('Vexo\Compare\Distance\euclidean');

it('produces correct Fidelity distance', function (): void {
    expect(Distance\fidelity([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.9692130429902465);
})->covers('Vexo\Compare\Distance\fidelity');

it('produces zero Gower distance with equal vectors', function (): void {
    expect(Distance\gower([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\gower');

it('produces correct Gower distance', function (): void {
    expect(Distance\gower([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toBe(16 / 5);
})->covers('Vexo\Compare\Distance\gower');

it('produces correct HarmonicMean distance', function (): void {
    expect(Distance\harmonicMean([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.94);
})->covers('Vexo\Compare\Distance\harmonicMean');

it('produces correct Hellinger distance', function (): void {
    expect(Distance\hellinger([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.3509242482915852);
})->covers('Vexo\Compare\Distance\hellinger');

it('produces correct InnerProduct distance', function (): void {
    expect(Distance\innerProduct([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.25);
})->covers('Vexo\Compare\Distance\innerProduct');

it('produces zero Intersection distance with equal vectors', function (): void {
    expect(Distance\intersection([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toEqualWithDelta(0, 1e-15);
})->covers('Vexo\Compare\Distance\intersection');

it('produces correct Intersection distance', function (): void {
    expect(Distance\intersection([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.20000000000000007);
    expect(Distance\intersection([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(Distance\manhattan([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]) / 2, 0.00001);
})->covers('Vexo\Compare\Distance\intersection');

it('produces correct Jaccard distance', function (): void {
    expect(Distance\jaccard([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(0.0);
    expect(Distance\jaccard([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(6 / 31, 0.0000000001);
})->covers('Vexo\Compare\Distance\jaccard');

it('produces correct Jeffreys distance', function (): void {
    expect(Distance\jeffreys([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.2484906649788);
})->covers('Vexo\Compare\Distance\jeffreys');

it('produces correct JensenDifference distance', function (): void {
    expect(Distance\jensenDifference([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(0.030518733906981843);
})->covers('Vexo\Compare\Distance\jensenDifference');

it('produces correct JensenShannon distance', function (): void {
    expect(Distance\jensenShannon([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.0305187339069818, 0.00005);
})->covers('Vexo\Compare\Distance\jensenShannon');

it('produces correct Kdivergence distance', function (): void {
    expect(Distance\kdivergence([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.029897607907053952, 0.00005);
})->covers('Vexo\Compare\Distance\kdivergence');

it('produces zero Kulczynski distance with equal vectors', function (): void {
    expect(Distance\kulczynski([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\kulczynski');

it('produces correct Kulczynski distance', function (): void {
    expect(Distance\kulczynski([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(16 / 11, 0.00005);
})->covers('Vexo\Compare\Distance\kulczynski');

it('produces correct KullbackLeibler distance', function (): void {
    expect(Distance\kullbackLeibler([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.12685113254635072, 0.00005);
})->covers('Vexo\Compare\Distance\kullbackLeibler');

it('produces correct KumarJohnson distance', function (): void {
    expect(Distance\kumarJohnson([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.5623488044808911, 0.00005);
})->covers('Vexo\Compare\Distance\kumarJohnson');

it('produces zero Lorentzian distance with equal vectors', function (): void {
    expect(Distance\lorentzian([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\lorentzian');

it('produces correct Lorentzian distance', function (): void {
    expect(Distance\lorentzian([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(log(864), 0.00005);
})->covers('Vexo\Compare\Distance\lorentzian');

it('produces zero Manhattan distance with equal vectors', function (): void {
    expect(Distance\manhattan([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\manhattan');

it('produces correct Manhattan distance', function (): void {
    expect(Distance\manhattan([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toBe(16.0);
})->covers('Vexo\Compare\Distance\manhattan');

it('produces correct matusita similarity', function (): void {
    expect(Distance\matusita([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.24814091564977162, 0.00005);
})->covers('Vexo\Compare\Distance\matusita');

it('produces zero Minkowski distance with equal vectors', function (): void {
    expect(Distance\minkowski([0, 1, 4, 6, 2], [0, 1, 4, 6, 2], 1))->toBe(0.0);
    expect(Distance\minkowski([0, 1, 4, 6, 2], [0, 1, 4, 6, 2], 2))->toBe(0.0);
    expect(Distance\minkowski([0, 1, 4, 6, 2], [0, 1, 4, 6, 2], 5))->toBe(0.0);
})->covers('Vexo\Compare\Distance\minkowski');

it('produces correct Minkowski distance', function (): void {
    expect(Distance\minkowski([0, 1, 4, 6, 2], [3, 6, 9, 4, 3], 1))->toBe(Distance\manhattan([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]));
    expect(Distance\minkowski([0, 1, 4, 6, 2], [3, 6, 9, 4, 3], 2))->toBe(Distance\euclidean([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]));
    expect(Distance\minkowski([0, 1, 4, 6, 2], [3, 6, 9, 4, 3], 5))->toBe(6526 ** (1 / 5));
})->covers('Vexo\Compare\Distance\minkowski');

it('produces half Motyka distance with equal vectors', function (): void {
    expect(Distance\motyka([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(0.5);
})->covers('Vexo\Compare\Distance\motyka');

it('produces correct Motyka distance', function (): void {
    expect(Distance\motyka([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.6000000000000001, 0.00005);
})->covers('Vexo\Compare\Distance\motyka');

it('produces zero Neyman distance with equal vectors', function (): void {
    expect(Distance\neyman([3, 1, 4, 6, 2], [3, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\neyman');

it('produces correct Neyman distance', function (): void {
    expect(Distance\neyman([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(32.41666666666667, 0.00005);
})->covers('Vexo\Compare\Distance\neyman');

it('produces zero Pearson distance with equal vectors', function (): void {
    expect(Distance\pearson([3, 1, 4, 6, 2], [3, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\pearson');

it('produces correct Pearson distance', function (): void {
    expect(Distance\pearson([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(8.277777777777779, 0.00005);
})->covers('Vexo\Compare\Distance\pearson');

it('produces zero ProbabilisticSymmetric distance with equal vectors', function (): void {
    expect(Distance\probabilisticSymmetric([3, 1, 4, 6, 2], [3, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\probabilisticSymmetric');

it('produces correct ProbabilisticSymmetric distance', function (): void {
    expect(Distance\probabilisticSymmetric([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(12.18901098901099, 0.00005);
    expect(Distance\probabilisticSymmetric([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(2 * Distance\squared([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]), 0.00005);
})->covers('Vexo\Compare\Distance\probabilisticSymmetric');

it('produces correct Ruzicka distance', function (): void {
    expect(Distance\ruzicka([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toBe(2 / 3);
})->covers('Vexo\Compare\Distance\ruzicka');

it('produces zero Soergel distance with equal vectors', function (): void {
    expect(Distance\soergel([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\soergel');

it('produces correct Soergel distance', function (): void {
    expect(Distance\soergel([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(16 / 27, 0.00005);
})->covers('Vexo\Compare\Distance\soergel');

it('produces zero Sorensen distance with equal vectors', function (): void {
    expect(Distance\sorensen([0, 1, 4, 6, 2], [0, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\sorensen');

it('produces correct Sorensen distance', function (): void {
    expect(Distance\sorensen([0, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(16 / 38, 0.00005);
})->covers('Vexo\Compare\Distance\sorensen');

it('produces zero Squared distance with equal vectors', function (): void {
    expect(Distance\squared([3, 1, 4, 6, 2], [3, 1, 4, 6, 2]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\squared');

it('produces correct Squared distance', function (): void {
    expect(Distance\squared([3, 1, 4, 6, 2], [3, 6, 9, 4, 3]))->toEqualWithDelta(6.094505494505495, 0.00005);
})->covers('Vexo\Compare\Distance\squared');

it('produces correct SquaredChord distance', function (): void {
    expect(Distance\squaredChord([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.06157391401950735, 0.00005);
})->covers('Vexo\Compare\Distance\squaredChord');

it('produces correct Taneja distance', function (): void {
    expect(Distance\taneja([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.031603932337718146, 0.00005);
})->covers('Vexo\Compare\Distance\taneja');

it('produces zero Tanimoto distance with equal vectors', function (): void {
    expect(Distance\tanimoto([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(0.0);
    expect(Distance\tanimoto([1, 0, 1], [1, 0, 1], true))->toBe(0.0);
})->covers('Vexo\Compare\Distance\tanimoto');

it('produces correct Tanimoto distance', function (): void {
    expect(Distance\tanimoto([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.33333333333333337, 0.00005);
    expect(Distance\soergel([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.33333333333333337, 0.00005);
    expect(Distance\tanimoto([1, 0, 1], [1, 1, 1], true))->toEqualWithDelta(0.333, 0.1);
})->covers('Vexo\Compare\Distance\tanimoto');

it('produces correct Topsoe distance', function (): void {
    expect(Distance\topsoe([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(0.0610374678139636, 0.00005);
})->covers('Vexo\Compare\Distance\topsoe');

it('produces zero WaveHedges distance with equal vectors', function (): void {
    expect(Distance\waveHedges([0.2, 0.4, 0.3, 0.1], [0.2, 0.4, 0.3, 0.1]))->toBe(0.0);
})->covers('Vexo\Compare\Distance\waveHedges');

it('produces correct WaveHedges distance', function (): void {
    expect(Distance\waveHedges([0.2, 0.4, 0.3, 0.1], [0.3, 0.2, 0.3, 0.2]))->toEqualWithDelta(4 / 3, 0.00005);
})->covers('Vexo\Compare\Distance\waveHedges');
