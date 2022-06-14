<?php

/**
  * @OA\Get(
  *      path="/v1/entities/hasil-inspeksi-produk-sea-tiger",
  *      operationId="browseHasilInspeksiProdukSeaTiger",
  *      tags={"hasil-inspeksi-produk-sea-tiger"},
  *      summary="Browse Hasil Inspeksi Produk Sea Tiger",
  *      description="Returns list of Hasil Inspeksi Produk Sea Tiger",
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
  *      path="/v1/entities/hasil-inspeksi-produk-sea-tiger/read?slug=hasil-inspeksi-produk-sea-tiger&id={id}",
  *      operationId="readHasilInspeksiProdukSeaTiger",
  *      tags={"hasil-inspeksi-produk-sea-tiger"},
  *      summary="Get Hasil Inspeksi Produk Sea Tiger based on id",
  *      description="Returns Hasil Inspeksi Produk Sea Tiger based on id",
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
  *      path="/v1/entities/hasil-inspeksi-produk-sea-tiger/add",
  *      operationId="addHasilInspeksiProdukSeaTiger",
  *      tags={"hasil-inspeksi-produk-sea-tiger"},
  *      summary="Insert new Hasil Inspeksi Produk Sea Tiger",
  *      description="Insert new Hasil Inspeksi Produk Sea Tiger into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "idPenerimaanDalam":"Abc", "totalEkor":"123", "beratIris":"123", "ekor":"Abc", "lbs":"Abc", "uniformity":"Abc", "blackSpot":"Abc", "blackTail":"Abc", "blackRing":"Abc", "dehidrasi":"Abc", "discolour":"Abc", "softShell":"Abc"},
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
  *      path="/v1/entities/hasil-inspeksi-produk-sea-tiger/edit",
  *      operationId="editHasilInspeksiProdukSeaTiger",
  *      tags={"hasil-inspeksi-produk-sea-tiger"},
  *      summary="Edit an existing Hasil Inspeksi Produk Sea Tiger",
  *      description="Edit an existing Hasil Inspeksi Produk Sea Tiger",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"tanggal":"Abc", "idPenerimaanDalam":"Abc", "totalEkor":"123", "beratIris":"123", "ekor":"Abc", "lbs":"Abc", "uniformity":"Abc", "blackSpot":"Abc", "blackTail":"Abc", "blackRing":"Abc", "dehidrasi":"Abc", "discolour":"Abc", "softShell":"Abc"},
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
  *      path="/v1/entities/hasil-inspeksi-produk-sea-tiger/delete",
  *      operationId="deleteHasilInspeksiProdukSeaTiger",
  *      tags={"hasil-inspeksi-produk-sea-tiger"},
  *      summary="Delete one record of Hasil Inspeksi Produk Sea Tiger",
  *      description="Delete one record of Hasil Inspeksi Produk Sea Tiger",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="hasil-inspeksi-produk-sea-tiger",
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
  *      path="/v1/entities/hasil-inspeksi-produk-sea-tiger/delete-multiple",
  *      operationId="deleteMultipleHasilInspeksiProdukSeaTiger",
  *      tags={"hasil-inspeksi-produk-sea-tiger"},
  *      summary="Delete multiple record of Hasil Inspeksi Produk Sea Tiger",
  *      description="Delete multiple record of Hasil Inspeksi Produk Sea Tiger",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="hasil-inspeksi-produk-sea-tiger",
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
  *      path="/v1/entities/hasil-inspeksi-produk-sea-tiger/sort",
  *      operationId="sortHasilInspeksiProdukSeaTiger",
  *      tags={"hasil-inspeksi-produk-sea-tiger"},
  *      summary="Sort existing Hasil Inspeksi Produk Sea Tiger",
  *      description="Sort existing Hasil Inspeksi Produk Sea Tiger",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="hasil-inspeksi-produk-sea-tiger",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "tanggal":"Abc", "idPenerimaanDalam":"Abc", "totalEkor":"123", "beratIris":"123", "ekor":"Abc", "lbs":"Abc", "uniformity":"Abc", "blackSpot":"Abc", "blackTail":"Abc", "blackRing":"Abc", "dehidrasi":"Abc", "discolour":"Abc", "softShell":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "tanggal":"Abc", "idPenerimaanDalam":"Abc", "totalEkor":"123", "beratIris":"123", "ekor":"Abc", "lbs":"Abc", "uniformity":"Abc", "blackSpot":"Abc", "blackTail":"Abc", "blackRing":"Abc", "dehidrasi":"Abc", "discolour":"Abc", "softShell":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="tanggal"), 
  *                         @OA\Property(type="string", property="idPenerimaanDalam"), 
  *                         @OA\Property(type="integer", property="totalEkor"), 
  *                         @OA\Property(type="integer", property="beratIris"), 
  *                         @OA\Property(type="string", property="ekor"), 
  *                         @OA\Property(type="string", property="lbs"), 
  *                         @OA\Property(type="string", property="uniformity"), 
  *                         @OA\Property(type="string", property="blackSpot"), 
  *                         @OA\Property(type="string", property="blackTail"), 
  *                         @OA\Property(type="string", property="blackRing"), 
  *                         @OA\Property(type="string", property="dehidrasi"), 
  *                         @OA\Property(type="string", property="discolour"), 
  *                         @OA\Property(type="string", property="softShell"), 
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