<?php

/**
  * @OA\Get(
  *      path="/v1/entities/penerimaan-luar",
  *      operationId="browsePenerimaanLuar",
  *      tags={"penerimaan-luar"},
  *      summary="Browse Penerimaan Luar",
  *      description="Returns list of Penerimaan Luar",
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
  *      path="/v1/entities/penerimaan-luar/read?slug=penerimaan-luar&id={id}",
  *      operationId="readPenerimaanLuar",
  *      tags={"penerimaan-luar"},
  *      summary="Get Penerimaan Luar based on id",
  *      description="Returns Penerimaan Luar based on id",
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
  *      path="/v1/entities/penerimaan-luar/add",
  *      operationId="addPenerimaanLuar",
  *      tags={"penerimaan-luar"},
  *      summary="Insert new Penerimaan Luar",
  *      description="Insert new Penerimaan Luar into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "idSupplier":"", "idUdang":"", "berat":"123", "total":"123", "idPegawai":""},
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
  *      path="/v1/entities/penerimaan-luar/edit",
  *      operationId="editPenerimaanLuar",
  *      tags={"penerimaan-luar"},
  *      summary="Edit an existing Penerimaan Luar",
  *      description="Edit an existing Penerimaan Luar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "idSupplier":"", "idUdang":"", "berat":"123", "total":"123", "idPegawai":""},
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
  *      path="/v1/entities/penerimaan-luar/delete",
  *      operationId="deletePenerimaanLuar",
  *      tags={"penerimaan-luar"},
  *      summary="Delete one record of Penerimaan Luar",
  *      description="Delete one record of Penerimaan Luar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="penerimaan-luar",
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
  *      path="/v1/entities/penerimaan-luar/delete-multiple",
  *      operationId="deleteMultiplePenerimaanLuar",
  *      tags={"penerimaan-luar"},
  *      summary="Delete multiple record of Penerimaan Luar",
  *      description="Delete multiple record of Penerimaan Luar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="penerimaan-luar",
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
  *      path="/v1/entities/penerimaan-luar/sort",
  *      operationId="sortPenerimaanLuar",
  *      tags={"penerimaan-luar"},
  *      summary="Sort existing Penerimaan Luar",
  *      description="Sort existing Penerimaan Luar",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="penerimaan-luar",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggal":"Abc", "idSupplier":"", "idUdang":"", "berat":"123", "total":"123", "idPegawai":"", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggal":"Abc", "idSupplier":"", "idUdang":"", "berat":"123", "total":"123", "idPegawai":"", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggal"), 
  *                         @OA\Property(type="string", property="idSupplier"), 
  *                         @OA\Property(type="string", property="idUdang"), 
  *                         @OA\Property(type="integer", property="berat"), 
  *                         @OA\Property(type="integer", property="total"), 
  *                         @OA\Property(type="string", property="idPegawai"), 
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