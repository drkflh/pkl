<?php

/**
  * @OA\Get(
  *      path="/v1/entities/temperature-suhu-udang",
  *      operationId="browseTemperatureSuhuUdang",
  *      tags={"temperature-suhu-udang"},
  *      summary="Browse Temperature Suhu Udang",
  *      description="Returns list of Temperature Suhu Udang",
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
  *      path="/v1/entities/temperature-suhu-udang/read?slug=temperature-suhu-udang&id={id}",
  *      operationId="readTemperatureSuhuUdang",
  *      tags={"temperature-suhu-udang"},
  *      summary="Get Temperature Suhu Udang based on id",
  *      description="Returns Temperature Suhu Udang based on id",
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
  *      path="/v1/entities/temperature-suhu-udang/add",
  *      operationId="addTemperatureSuhuUdang",
  *      tags={"temperature-suhu-udang"},
  *      summary="Insert new Temperature Suhu Udang",
  *      description="Insert new Temperature Suhu Udang into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggalJam":"Abc", "rawMaterial":"Abc", "potongKepala":"Abc", "sortir":"Abc", "koreksi":"Abc", "susun":"Abc"},
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
  *      path="/v1/entities/temperature-suhu-udang/edit",
  *      operationId="editTemperatureSuhuUdang",
  *      tags={"temperature-suhu-udang"},
  *      summary="Edit an existing Temperature Suhu Udang",
  *      description="Edit an existing Temperature Suhu Udang",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggalJam":"Abc", "rawMaterial":"Abc", "potongKepala":"Abc", "sortir":"Abc", "koreksi":"Abc", "susun":"Abc"},
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
  *      path="/v1/entities/temperature-suhu-udang/delete",
  *      operationId="deleteTemperatureSuhuUdang",
  *      tags={"temperature-suhu-udang"},
  *      summary="Delete one record of Temperature Suhu Udang",
  *      description="Delete one record of Temperature Suhu Udang",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="temperature-suhu-udang",
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
  *      path="/v1/entities/temperature-suhu-udang/delete-multiple",
  *      operationId="deleteMultipleTemperatureSuhuUdang",
  *      tags={"temperature-suhu-udang"},
  *      summary="Delete multiple record of Temperature Suhu Udang",
  *      description="Delete multiple record of Temperature Suhu Udang",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="temperature-suhu-udang",
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
  *      path="/v1/entities/temperature-suhu-udang/sort",
  *      operationId="sortTemperatureSuhuUdang",
  *      tags={"temperature-suhu-udang"},
  *      summary="Sort existing Temperature Suhu Udang",
  *      description="Sort existing Temperature Suhu Udang",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="temperature-suhu-udang",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggalJam":"Abc", "rawMaterial":"Abc", "potongKepala":"Abc", "sortir":"Abc", "koreksi":"Abc", "susun":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggalJam":"Abc", "rawMaterial":"Abc", "potongKepala":"Abc", "sortir":"Abc", "koreksi":"Abc", "susun":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggalJam"), 
  *                         @OA\Property(type="string", property="rawMaterial"), 
  *                         @OA\Property(type="string", property="potongKepala"), 
  *                         @OA\Property(type="string", property="sortir"), 
  *                         @OA\Property(type="string", property="koreksi"), 
  *                         @OA\Property(type="string", property="susun"), 
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