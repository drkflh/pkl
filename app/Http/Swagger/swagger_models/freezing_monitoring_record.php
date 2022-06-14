<?php

/**
  * @OA\Get(
  *      path="/v1/entities/freezing-monitoring-record",
  *      operationId="browseFreezingMonitoringRecord",
  *      tags={"freezing-monitoring-record"},
  *      summary="Browse Freezing Monitoring Record",
  *      description="Returns list of Freezing Monitoring Record",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/freezing-monitoring-record/read?slug=freezing-monitoring-record&id={id}",
  *      operationId="readFreezingMonitoringRecord",
  *      tags={"freezing-monitoring-record"},
  *      summary="Get Freezing Monitoring Record based on id",
  *      description="Returns Freezing Monitoring Record based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/freezing-monitoring-record/add",
  *      operationId="addFreezingMonitoringRecord",
  *      tags={"freezing-monitoring-record"},
  *      summary="Insert new Freezing Monitoring Record",
  *      description="Insert new Freezing Monitoring Record into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"date":"Abc", "noFreezingUnit":"", "startTime":"Abc", "freezingTemperature1":"123", "amountOfProduct":"123", "endTime":"Abc", "freezingTemperature2":"123", "productCondition":"123", "componentAction":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/freezing-monitoring-record/edit",
  *      operationId="editFreezingMonitoringRecord",
  *      tags={"freezing-monitoring-record"},
  *      summary="Edit an existing Freezing Monitoring Record",
  *      description="Edit an existing Freezing Monitoring Record",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"date":"Abc", "noFreezingUnit":"", "startTime":"Abc", "freezingTemperature1":"123", "amountOfProduct":"123", "endTime":"Abc", "freezingTemperature2":"123", "productCondition":"123", "componentAction":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/freezing-monitoring-record/delete",
  *      operationId="deleteFreezingMonitoringRecord",
  *      tags={"freezing-monitoring-record"},
  *      summary="Delete one record of Freezing Monitoring Record",
  *      description="Delete one record of Freezing Monitoring Record",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="freezing-monitoring-record",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/freezing-monitoring-record/delete-multiple",
  *      operationId="deleteMultipleFreezingMonitoringRecord",
  *      tags={"freezing-monitoring-record"},
  *      summary="Delete multiple record of Freezing Monitoring Record",
  *      description="Delete multiple record of Freezing Monitoring Record",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="freezing-monitoring-record",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/freezing-monitoring-record/sort",
  *      operationId="sortFreezingMonitoringRecord",
  *      tags={"freezing-monitoring-record"},
  *      summary="Sort existing Freezing Monitoring Record",
  *      description="Sort existing Freezing Monitoring Record",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="freezing-monitoring-record",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "date":"Abc", "noFreezingUnit":"", "startTime":"Abc", "freezingTemperature1":"123", "amountOfProduct":"123", "endTime":"Abc", "freezingTemperature2":"123", "productCondition":"123", "componentAction":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "date":"Abc", "noFreezingUnit":"", "startTime":"Abc", "freezingTemperature1":"123", "amountOfProduct":"123", "endTime":"Abc", "freezingTemperature2":"123", "productCondition":"123", "componentAction":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="date"), 
  *                         @OA\Property(type="string", property="noFreezingUnit"), 
  *                         @OA\Property(type="string", property="startTime"), 
  *                         @OA\Property(type="integer", property="freezingTemperature1"), 
  *                         @OA\Property(type="integer", property="amountOfProduct"), 
  *                         @OA\Property(type="string", property="endTime"), 
  *                         @OA\Property(type="integer", property="freezingTemperature2"), 
  *                         @OA\Property(type="integer", property="productCondition"), 
  *                         @OA\Property(type="string", property="componentAction"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */