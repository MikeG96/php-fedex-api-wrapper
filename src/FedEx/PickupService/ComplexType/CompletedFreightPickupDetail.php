<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data resulting from the processing of an LTL Freight pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property FreightServiceCenterDetail $Origin
 * @property CompletedFreightPickupLineItem[] $LineItems
 * @property nonNegativeInteger $TotalPieces
 * @property Weight $TotalWeight
 * @property nonNegativeInteger $TotalHandlingUnits
 * @property \FedEx\Pickup\SimpleType\PickupEventType|string $Status

 */
class CompletedFreightPickupDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedFreightPickupDetail';

    /**
     * Describes the origin service center handling the pickup.
     *
     * @param FreightServiceCenterDetail $origin
     * @return $this
     */
    public function setOrigin(FreightServiceCenterDetail $origin)
    {
        $this->values['Origin'] = $origin;
        return $this;
    }

    /**
     * Describes the results for each line item in the original request.
     *
     * @param CompletedFreightPickupLineItem[] $lineItems
     * @return $this
     */
    public function setLineItems(array $lineItems)
    {
        $this->values['LineItems'] = $lineItems;
        return $this;
    }

    /**
     * Total number of pieces from all line items from request.
     *
     * @param nonNegativeInteger $totalPieces
     * @return $this
     */
    public function setTotalPieces($totalPieces)
    {
        $this->values['TotalPieces'] = $totalPieces;
        return $this;
    }

    /**
     * Total weight from all line items from request.
     *
     * @param Weight $totalWeight
     * @return $this
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->values['TotalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Total handling units from all line items from request.
     *
     * @param nonNegativeInteger $totalHandlingUnits
     * @return $this
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->values['TotalHandlingUnits'] = $totalHandlingUnits;
        return $this;
    }

    /**
     * Resulting status of pickup.
     *
     * @param \FedEx\Pickup\SimpleType\PickupEventType|string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['Status'] = $status;
        return $this;
    }

    
}
