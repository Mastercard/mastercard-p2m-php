<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\P2m;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class TransferNotificationRegistration extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "e1b6884d-c09b-42be-b5b8-961560b71095":
                return new OperationConfig("/send/v1/partners/{partnerId}/notification-registries/pan", "create", array(), array());
            case "71e6c542-c866-4f65-8fd0-e333da9eb87a":
                return new OperationConfig("/send/v1/partners/{partnerId}/notification-registries/pan ", "create", array(), array());
            case "de0a0c2a-535b-459f-bdae-cdffce7bd1a4":
                return new OperationConfig("/send/v1/partners/{partnerId}/notification-registries/readbypan", "create", array(), array());
            case "b52655ac-ed28-44c9-acf6-1d34fbffbab1":
                return new OperationConfig("/send/v1/partners/{partnerId}/notification-registries/pan", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type TransferNotificationRegistration
    *
    * @param Map map, containing the required parameters to create a new object
    * @return TransferNotificationRegistration of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("e1b6884d-c09b-42be-b5b8-961560b71095", new TransferNotificationRegistration($map));
    }





   /**
    * Creates object of type TransferNotificationRegistration
    *
    * @param Map map, containing the required parameters to create a new object
    * @return TransferNotificationRegistration of the response of created instance.
    */
    public static function delete($map)
    {
        return self::execute("71e6c542-c866-4f65-8fd0-e333da9eb87a", new TransferNotificationRegistration($map));
    }





   /**
    * Creates object of type TransferNotificationRegistration
    *
    * @param Map map, containing the required parameters to create a new object
    * @return TransferNotificationRegistration of the response of created instance.
    */
    public static function readby($map)
    {
        return self::execute("de0a0c2a-535b-459f-bdae-cdffce7bd1a4", new TransferNotificationRegistration($map));
    }






    /**
     * Updates an object of type TransferNotificationRegistration
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return TransferNotificationRegistration of the response
     */
    public function update()  {
        return self::execute("b52655ac-ed28-44c9-acf6-1d34fbffbab1",$this);
    }






}

