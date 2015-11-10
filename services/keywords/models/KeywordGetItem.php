<?php

namespace directapi\keywords\models;


use directapi\common\enum\PriorityEnum;
use directapi\common\enum\StateEnum;
use directapi\common\enum\StatusEnum;

class KeywordGetItem
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var string
     */
    public $Keyword;

    /**
     * @var string
     */
    public $UserParam1;

    /**
     * @var string
     */
    public $UserParam2;

    /**
     * @var int
     */
    public $Bid;

    /**
     * @var int
     */
    public $ContextBid;

    /**
     * @var PriorityEnum
     */
    public $StrategyPriority;

    /**
     * @var StatusEnum
     */
    public $Status;

    /**
     * @var StateEnum
     */
    public $State;

    /**
     * @var Productivity
     */
    public $Productivity;
}