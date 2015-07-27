<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle;


final class TannaProductBundleEvents
{
    /**
     * The CREATE_PRODUCT_INITIALIZE event occurs when a product creation process is initialized.
     *
     * This event allows you to modify the default values of the product before binding the form.
     */
    const CREATE_PRODUCT_INITIALIZE = 'tanna_product.product.create.initialize';

    /**
     * The CREATE_PRODUCT_SUCCESS event occurs when the form is submitted successfully.
     *
     * This event allows you to set the response instead of using the default one.
     */
    const CREATE_PRODUCT_SUCCESS = 'fos_user.change_password.edit.success';

    /**
     * The CREATE_PRODUCT_COMPLETED event occurs after saving the product in the database.
     *
     */
    const CREATE_PRODUCT_COMPLETED = 'fos_user.change_password.edit.completed';

}