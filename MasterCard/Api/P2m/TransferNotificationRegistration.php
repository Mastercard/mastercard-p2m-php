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
            case "eea58ff1-9ac8-4897-bc0f-935ec842631a":
                return new OperationConfig("/send/v1/partners/{partnerId}/notification-registries", "create", array(), array());
            case "c7ff1e39-7b74-409f-a620-04f18295eec6":
                return new OperationConfig("/send/v1/partners/{partnerId}/notification-registries/{account-reg-ref}", "delete", array(), array());
            case "2ead122a-64b3-4a2f-bb2a-45a280edd647":
                return new OperationConfig("/send/v1/partners/{partnerId}/notification-registries/{account-reg-ref}", "read", array(), array());
            case "76667e94-b709-488c-b18f-1f96722b33c2":
                return new OperationConfig("/send/v1/partners/{partnerId}/notification-registries/{account-reg-ref}", "update", array(), array());
            
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
        return self::execute("eea58ff1-9ac8-4897-bc0f-935ec842631a", new TransferNotificationRegistration($map));
    }








   /**
    * Delete object of type TransferNotificationRegistration by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return TransferNotificationRegistration of the response.
    */
    public static function deleteById($id, $requestMap = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if (!empty($requestMap)) {
            $map->setAll($requestMap);
        }
        return self::execute("c7ff1e39-7b74-409f-a620-04f18295eec6", new TransferNotificationRegistration($map));
    }

   /**
    * Delete this object of type TransferNotificationRegistration
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return TransferNotificationRegistration of the response.
    */
    public function delete()
    {
        return self::execute("c7ff1e39-7b74-409f-a620-04f18295eec6", $this);
    }






    /**
     * Returns objects of type TransferNotificationRegistration by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return TransferNotificationRegistration of the response
     */
    public static function readby($id, $criteria = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if ($criteria != null) {
            $map->setAll($criteria);
        }
        return self::execute("2ead122a-64b3-4a2f-bb2a-45a280edd647",new TransferNotificationRegistration($map));
    }


    /**
     * Updates an object of type TransferNotificationRegistration
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return TransferNotificationRegistration of the response
     */
    public function update()  {
        return self::execute("76667e94-b709-488c-b18f-1f96722b33c2",$this);
    }






}

