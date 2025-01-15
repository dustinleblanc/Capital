<?php

namespace App\Entity;

interface CommodityInterface
{
    /**
     * Get the value of a commodity relative to the value of another commodity.
     *
     * @param CommodityInterface $commodity
     *   The commodity to compare with.
     *
     * @param int $quantity
     *   The number of the commodity for the comparison, for example, 20 yards of linen.
     *
     * @return float
     *   The amount of the exchange commodity that is equivelant to the commdity and quantity provided.
     */
    public function getRelativeValue(CommodityInterface $commodity, int $quantity): float;

    /**
     * Get the labor contained in the commodity.
     *
     * @return float
     *   The amount of labor contained in a commodity, usually expressed in hours.
     */
    public function getLabor(): ?float;
}
