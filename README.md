Namluu_Helloadmin module functionality is represented by the following sub-systems:
- Registering a Backend Controller
    - etc/adminhtml/routes.xml
    - **extends** Magento\Backend\App\Action
- Extending the menu
    - etc/adminhtml/menu.xml
- Adding an ACL
    - etc/acl.xml
    - \Namluu\Helloadmin\Controller\Adminhtml\Index\Index::_isAllowed
- Grids
    - Block
    - uiComponent
- Form
    - uiComponent
- Adding System configuration parameters 
    - etc/adminhtml/system.xml
    - etc/config.xml

For development purposes, it is recommended that we remove the secret key (the hash in
the URL) from the admin URLs. You can configure this in Stores | Configuration |
Advanced | Admin | Security
