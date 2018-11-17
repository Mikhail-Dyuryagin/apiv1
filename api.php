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
 * @api {post} /user/role/user/:id Update info for user
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
 * @api {post} /user/role/admin/:id Update info for Admins
 * @apiName UpdateUserForAdmin
 * @apiGroup User
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
 * @apiError Forbinden Mismatch of role and action
 *
 * @apiErrorExample {json} Error-Responce:
 *     HTTP/1.1 403 Forbinden
 *     {
 *       "error": "Mismatch of role and action"
 *     }
 *
 * @apiDescription
 *
 * Customer can delete only himself,
 *
 * Administrator can delete only other users.
 *
 */
/**
 * @api {get} /products/ Get list og products
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
 *         "name": "product1",
 *         "price": "123",
 *         "description": "Description of product1",
 *         "balance": "5",
 *         "sale": "0.03",
 *         "category": "Category of product"
 *       }]
 *     }
 */

/**
 * @api {get} /products/search/:name Search for a product
 * @apiName ProductsSearch
 * @apiGroup Products
 *
 * @apiSuccess {Object} product Product info
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *         "id": "123",
 *         "name": "product1",
 *         "price": "123",
 *         "description": "Description of product1",
 *         "balance": "5",
 *         "sale": "0.03",
 *         "category": "Category of product"
 *     }
 *
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
 * @apiParam {Number} balance Stock balance
 * @apiParam {Number} sale Sale value in decimal (example: 0.05 )
 * @apiParam {String} category Product category
 *
 * @apiSuccess {Number} id Product id
 *
 * @apiSuccessExample {json} Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": "123"
 *     }

*/
