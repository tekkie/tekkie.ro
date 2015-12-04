<?php  if (!defined('SYSPATH')) exit('No direct script access allowed');
 /**
 * Curl library for CodeIgniter, ported to Kohana by Georgiana Beju <gb@tekkie.ro>
 *
 * @package    Curl
 * @author     Alex Polski
 * @copyright  (c) 2007-2008 Alex Polski
 * @license    http://alexpolski.com/2008/04/15/how-to-check-google-pagerank-in-php/
 * @version    1.0
 * 
 * TODO: referers (CURLOPT_AUTOREFERER, CURLOPT_REFERER)
 * TODO: cookies (CURLOPT_COOKIE, CURLOPT_COOKIEFILE, CURLOPT_COOKIEJAR)
 * TODO: proxies (CURLOPT_HTTPPROXYTUNNEL, CURLOPT_PROXY, CURLOPT_PROXYUSERPWD)
 * TODO: auth (CURLOPT_USERPWD)
 * TODO: follow location (CURLOPT_FOLLOWLOCATION, CURLOPT_MAXREDIRS)
 * TODO: caching (CURLOPT_FRESH_CONNECT)
 * TODO: file uploading
 * TODO: additional headers (CURLOPT_HTTPHEADER)
 */
class Curl_Core {

  protected $user_agent   = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)';
  protected $timeout      = 30;
  protected $auto_referer = TRUE;
  protected $debug        = TRUE;
  protected $handle_id    = FALSE;
  

  /**
   * Constructor - Sets Preferences
   *
   * The constructor can be passed an array of config values
   */ 
  public function __construct( $config = array() ) {
    if( count( $config ) > 0 ) {
      $this->initialize( $config );
    }
  } // END func __construct()

  // --------------------------------------------------------------------

  /**
   * Initialize preferences
   *
   * @access  public
   * @param array
   * @return  void
   */ 
  public function initialize( $config = array() ) {
    foreach( $config as $key => $val ) {
      if( isset( $this->$key ) && property_exists( $this, $key ) ) {
        $this->$key = $val;
      }
    }
  } // END func initialize()

  /**
   * Opens CURL session
   * 
   * @access  public
   * @param array
   * @return  void
   */
  public function open( $config = array() ) {
    if( count( $config ) > 0 ) {
      $this->initialize( $config );
    }
    $this->handle_id = @curl_init();
    $this->_check_error();
  } // END func open()

  /**
   * Validates the CURL handle
   *
   * @access  private
   * @return  bool
   */ 
  public function _is_valid_handle() {
    if( ! is_resource( $this->handle_id ) ) {
      if( $this->debug == TRUE ) {
        throw new Kohana_Exception( 'curl.no_handle' );
      }   
      return FALSE;
    }
    return TRUE;
  } // END func _is_valid_handle()
  
  /**
   * Return TRUE if the connection is opened
   *
   * @access  public
   * @return  bool
   */
  public function is_opened() {
    if( ! is_resource( $this->handle_id ) ) {
      return FALSE;
    }
    return TRUE;
  } // END func is_opened()

  /**
   * Set an option for a CURL session
   * 
   * @access  private
   * @param int
   * @param mixed
   * @return  void
   */
  public function _set_opt( $option, $value ) {
    @curl_setopt( $this->handle_id, $option, $value );
  } // END func _set_opt()

  /**
   * Performs HTTP GET operation
   * 
   * @access  public
   * @param string
   * @param array
   * @param bool
   * @return  string
   */
  public function http_get( $url, $headers = array(), $headers_only = FALSE ) {
    if( ! @$this->_is_valid_handle() ) {
      return FALSE;
    }
    $this->_set_opt( CURLOPT_URL,            $url              );
    $this->_set_opt( CURLOPT_RETURNTRANSFER, TRUE              );
    $this->_set_opt( CURLOPT_USERAGENT,      $this->user_agent );
    $this->_set_opt( CURLOPT_TIMEOUT,        $this->timeout    );
    $this->_set_opt( CURLOPT_HTTPGET,        TRUE              );
    if( $headers_only ) {
      $this->_set_opt( CURLOPT_HEADER, TRUE );
      $this->_set_opt( CURLOPT_NOBODY, TRUE );
    } else {
      $this->_set_opt( CURLOPT_HEADER, FALSE );
      $this->_set_opt( CURLOPT_NOBODY, FALSE );
    }
    $ret = @curl_exec( $this->handle_id );
    $this->_check_error();
    return $ret;
  } // END func http_get()

  /**
   * Performs HTTP POST operation
   * 
   * @access  public
   * @param string
   * @param string
   * @param array
   * @param bool
   * @return  string
   */
  public function http_post( $url, $fields, $headers = array(), $headers_only = FALSE ) {
    if( ! @$this->_is_valid_handle() ) {
      return FALSE;
    }
    $this->_set_opt( CURLOPT_URL,            $url              );
    $this->_set_opt( CURLOPT_RETURNTRANSFER, TRUE              );
    $this->_set_opt( CURLOPT_USERAGENT,      $this->user_agent );
    $this->_set_opt( CURLOPT_TIMEOUT,        $this->timeout    );
    $this->_set_opt( CURLOPT_POST,           TRUE              );
    $this->_set_opt( CURLOPT_POSTFIELDS,     $fields           );
    if( $headers_only ) {
      $this->_set_opt( CURLOPT_HEADER, TRUE );
      $this->_set_opt( CURLOPT_NOBODY, TRUE );
    } else {
      $this->_set_opt( CURLOPT_HEADER, FALSE );
      $this->_set_opt( CURLOPT_NOBODY, FALSE );
    }
    $ret = @curl_exec($this->handle_id);
    $this->_check_error();
    return $ret;
  } // END func http_post()

  /**
   * Returns an HTTP code
   * 
   * @access  public
   * @return  int
   */
  public function get_http_code() {
    if( ! @$this->_is_valid_handle() ) {
      return FALSE;
    }
    $ret = @curl_getinfo( $this->handle_id, CURLINFO_HTTP_CODE );
    $this->_check_error();
    return $ret;
  } // END func get_http_code()

  /**
   * Returns a total time in seconds for the last operation
   * 
   * @access  public
   * @return  int
   */
  public function get_total_time() {
    if( ! @$this->_is_valid_handle() ) {
      return FALSE;
    }
    $ret = @curl_getinfo( $this->handle_id, CURLINFO_TOTAL_TIME );
    $this->_check_error();
    return $ret;
  } // END func get_total_time()

  /**
   * Returns a number of bytes uploaded
   * 
   * @access  public
   * @return  int
   */
  public function get_bytes_uploaded() {
    if( ! @$this->_is_valid_handle() ) {
      return FALSE;
    }
    $ret = @curl_getinfo( $this->handle_id, CURLINFO_SIZE_UPLOAD );
    $this->_check_error();
    return $ret;
  } // END func get_bytes_uploaded()

  /**
   * Returns a number of bytes downloaded
   * 
   * @access  public
   * @return  int
   */
  public function get_bytes_downloaded() {
    if( ! @$this->_is_valid_handle() ) {
      return FALSE;
    }
    $ret = @curl_getinfo( $this->handle_id, CURLINFO_SIZE_DOWNLOAD );
    $this->_check_error();
    return $ret;
  } // END func get_bytes_downloaded()

  /**
   * Returns an average upload speed
   * 
   * @access  public
   * @return  int
   */
  public function get_speed_upload() {
    if( ! @$this->_is_valid_handle() ) {
      return FALSE;
    }
    $ret = @curl_getinfo( $this->handle_id, CURLINFO_SPEED_UPLOAD );
    $this->_check_error();
    return $ret;
  } // END func get_speed_upload()

  /**
   * Returns an average download speed
   * 
   * @access  public
   * @return  int
   */
  public function get_speed_download() {
    if( ! @$this->_is_valid_handle() ) {
      return FALSE;
    }
    $ret = @curl_getinfo( $this->handle_id, CURLINFO_SPEED_DOWNLOAD );
    $this->_check_error();
    return $ret;
  } // END func get_speed_download()

  /**
   * Close the CURL session
   *
   * @access  public
   * @return  bool
   */ 
  public function close() {
    if( ! $this->_is_valid_handle() ) {
      return FALSE;
    }
    @curl_close( $this->handle_id );
  } // END func close()

  /**
   * Check for an CURL error and display error message
   * @access  private
   * @return  void
   */
  public function _check_error() {
    if( ( @curl_error( $this->handle_id ) != 0 ) && ( $this->debug == TRUE ) ) {
      //show_error( @curl_error( $this->handle_id ) );
      throw new Kohana_Exception( 'curl.general_error', @curl_error( $this->handle_id ) );
    }
  } // END func _check_error()

} // END class Curl_Core