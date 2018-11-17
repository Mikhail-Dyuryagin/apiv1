/**
 * @api {put} /user/ Create new user
 * @apiName CreateUser
 * @apiGroup User
 *
 * @apiParam {String} email User's email
 * @apiParam {String} password User's password
 *
 * @apiSuccess {Number} id New user id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 *
 * @apiError EmailAlreadyTaken User already exists
 *
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 400 EmailAlreadyTaken
 *     {
 *       "error": "User Already Exists"
 *     }
 */
/**
 * @api {post} /user/users/:id Update info for user
 * @apiName UpdateUserForUser
 * @apiGroup User
 *
 * @apiParam {String} name User's name
 * @apiParam {String} email User's email
 * @apiParam {String} password User's password
 *
 * @apiSuccess {Number} id User id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 *
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 400 EmailAlreadyTaken
 *     {
 *       "error": "Email Already Exists"
 *     }
 *
 *
 * @apiDescription
 *
 * Customer can change only itself info!
 *
*/

/**
 * @api {post} /user/admins/:id Update info for Admins
 * @apiName UpdateUserForAdmin
 * @apiGroup User
 * @apiPermission Administrator
 *
 * @apiParam {String} name User's name
 * @apiParam {String} email User's email
 * @apiParam {String} password User's password
 * @apiParam {String} status  User's name
 * @apiParam {String} role  User's name
 *
 * @apiSuccess {Number} id User id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 *
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 400 EmailAlreadyTaken
 *     {
 *       "error": "Email Already Exists"
 *     }
 *
 *
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 401 GlobalAdminNotDisable
 *     {
 *       "error": "Global Admin does not disable"
 *     }
 *
 * @apiDescription
 *
 * Customer can change only itself info!
*/
/**
 * @api {delete} /user/:id Delete user
 * @apiName DeleteUser
 * @apiGroup User
 *
 * @apiSuccess {Number} id User id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123",
 *     }
 *
 * @apiError User is absent
 *
 * @apiErrorExample {json} Error-Responce:
 *     HTTP/1.1 404 Not found
 *     {
 *       "error": "User is absent"
 *     }
 *
 * @apiDescription
 *
 * 
 *
 * Administrator can delete only other users.
 *
 */
/**
 * @api {get} /products/ Get list  products
 * @apiName ProductsList
 * @apiGroup Products
 *
 * @apiSuccess {Object[]} products List of Products
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "products" : [{
 *         "id": "123",
 *         "name": "productN",
 *         "price": "123",
 *         "description": "Description",
 *         "count": "2",
 *         "category": "Category"
 *       }]
 *     }
 */

/**
 * @api {get} /products/search/:name Search  products
 * @apiName ProductsSearch
 * @apiGroup Products
 *
 * @apiSuccess {Object} product Product info
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "products" : [{
 *         "id": "123",
 *         "name": "productN",
 *         "price": "123",
 *         "description": "Description",
 *         "count": "2",
 *         "category": "Category"
 *       }]
 *     }
 * @apiError NotFound Product not found
 *
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 NotFound
 *     {
 *       "error": "Product not found"
 *     }
 */

/**
 * @api {put} /products/ Add new product
 * @apiName ProductsAdd
 * @apiGroup Products
 * @apiPermission Administrator
 *
 * @apiParam {String} name Product name
 * @apiParam {Number} price Product price
 * @apiParam {String} description Product description
 * @apiParam {Number} count Count products
 * @apiParam {String} category Product category
 *
 * @apiSuccess {Number} id Product id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 * @apiError AlreadyExist Product already exists
 *
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 400 AlreadyExist
 *     {
 *       "error": "Product already exists"
 *     }
*/
/**
 * @api {delete} /products/:name Delete product
 * @apiName ProductsDelete
 * @apiGroup Products
 * @apiPermission Administrator
 *
 * @apiSuccess {Number} id Product id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     }
 *       "id": "123"
 *     }
 *
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 NotFound
 *     {
 *       "error": "Product not found"
 *     }
 */
/**
 * @api {post} /products/:name Edit product info
 * @apiName ProductsEdit
 * @apiGroup Products
 * @apiPermission Administrator
 *
 * @apiParam {String} name Product name
 * @apiParam {Number} price Product price
 * @apiParam {String} description Product description
 * @apiParam {Number} count count products
 * @apiParam {String} category Product category
 *
 * @apiSuccess {Number} id Product id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 NotFound
 *     {
 *       "error": "Product not found"
 *     }
 */
/**
 * @api {get} /orders/:id Get order info
 * @apiName GetOrder
 * @apiGroup Orders
 *
 * @apiSuccess {String} user Username of customer
 * @apiSuccess {String} status Order status
 * @apiSuccess {String} payment Payment method
 * @apiSuccess {Object[]} order Order list
 * @apiSuccess {String} address Delivery adress
 * @apiSuccess {String} time Date and time of order
 *
 * @apiSuccessExample {json} Success-Responcse:
 *     HTTP/1.1 200 OK
 *     {
 *       "user": "Ivanov",
 *       "status": "Waits payment",
 *       "payment": "Visa",
 *       "order": [{
 *         "id": "123",
 *         "amount": "2"
 *         },{
 *         "id": "1234",
 *         "amount": "1"
 *         }],
 *       "address": "Russia, Moscow",
 *       "time": "20181117222027"
 *     }
 *
 * @apiError Forbinden Not a customer order
 * @apiErrorExample {json} Forbinden-Response:
 *     HTTP/1.1 403 Forbinden
 *     {
 *       "error": "Not a customer order"
 *     } 
 * @apiError NotFounf Order not found
 *
 * @apiErrorExample {json} Forbinden-Response:
 *     HTTP/1.1 404 Not found
 *     {
 *       "error": "Orders not found"
 *     }
 */


/**
 * @api {put} /orders/ Create order
 * @apiName CreateOrder
 * @apiGroup Orders
 *
 * @apiParam {String} address Delivery address
 * @apiParam {String} payment Payment method
 * @apiParam {Object[]} order List of products for order
 *
 * @apiParamExample {json} Request-Example:
 *     {
 *       "address": "Russia, Omsk"
 *       "payment": "cash"
 *       "order": [{
 *         "id": "1",
 *         "amount": "1"
 *         },{
 *         "id": "2",
 *         "amount": "2"
 *         }]
 *     }
 *
 * @apiSuccess {Number} id Order id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }
 */
/**
 * @api {delete} /orders/:id Cancel order
 * @apiName CancelOrder
 * @apiGroup Orders
 *
 * @apiSuccess {Number} id Order id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1
 *     {
 *       "id": "123"
 *     }
 *
 * @apiError Order not found
 *
 * @apiErrorExample {json} Forbinden-Response:
 *     HTTP/1.1 404 Not found
 *     {
 *       "error": "Order not found"
 *     }
 */

/**
 * @api {post} /orders/:id Edit order status
 * @apiName EditOrder
 * @apiGroup Orders
 * @apiPermission Administrator
 *
 * @apiParam {String} status Order status
 *
 * @apiSuccess {Number} id Order id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1
 *     {
 *       "id": "123"
 *     }
 *
 * @apiError NotFound Order not found
 *
 * @apiErrorExample {json} Error-Response:
 *     HTTP/1.1 404 NotFound
 *     {
 *       "error": "Order not found"
 *     }
 */
