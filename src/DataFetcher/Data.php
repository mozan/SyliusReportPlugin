<?php

namespace Odiseo\SyliusReportPlugin\DataFetcher;

class Data
{
    /**
     * array of labels
     *
     * @var array
     */
    private $labels;

    /**
     * array of data
     *
     * @var array
     */
    private $data;

    /**
     * Gets the array of labels.
     *
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets the array of labels.
     *
     * @param array $labels the labels
     *
     * @return self
     */
    public function setLabels(array $labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Gets the array of data.
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets the array of data.
     *
     * @param array $data the data
     *
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
