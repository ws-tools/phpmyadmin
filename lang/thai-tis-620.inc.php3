<?php
/* $Id$ */

// first created 2002/04/29 Arthit Suriyawongkul & Warit Wanasathian
// last modified 2003/03/12 Arthit Suriyawongkul

$charset = 'tis-620';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('亵�', '����亵�', '�����亵�', '�ԡ�亵�', '����亵�', 'ྵ��亵�', '�͡��亵�');

$day_of_week = array('��.', '�.', '�.', '�.', '��.', '�.', '�.');
$month = array('�.�.', '�.�.', '��.�.', '��.�.', '�.�.', '��.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.', '�.�.');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y  %R�.';

$timespanfmt = '%s �ѹ, %s �������, %s �ҷ�, %s �Թҷ�';

$strAPrimaryKey = '�����������դ�������� %s';
$strAbortedClients = '¡��ԡ';
$strAccessDenied = '���͹حҵ�����ҹ';
$strAction = '��зӡ��';
$strAddDeleteColumn = '����/ź ������� (��Ŵ�)';
$strAddDeleteRow = '����/ź ��';
$strAddNewField = '������Ŵ�����';
$strAddPriv = '�����Է��';
$strAddPrivMessage = '�����Է�����º��������';
$strAddPrivilegesOnDb = '�����Է�Ԣͧ�ҹ�����ŵ��仹��';
$strAddPrivilegesOnTbl = '�����Է�Ԣͧ���ҧ���仹��';
$strAddSearchConditions = '�������͹�㹡�ä���:';
$strAddToIndex = '�����Ѫ�դ������ %s';
$strAddUser = '�������������';
$strAddUserMessage = '����������������º��������';
$strAdministration = '��ô����к�';
$strAffectedRows = '�Ƿ���ռ�:';
$strAfter = '��ѧ %s';
$strAfterInsertBack = '�觡�Ѻ';
$strAfterInsertNewInsert = '�á����¹����';
$strAll = '������';
$strAllTableSameWidth = '����ʴ����ҧ�ء�ѹ ���¤������ҧ��ҡѹ�������?';
$strAlterOrderBy = '���§���㹵��ҧ���';
$strAnIndex = '�������Ѫ������� %s';
$strAnalyzeTable = '����������ҧ';
$strAnd = '���';
$strAny = '��';
$strAnyColumn = '���������';
$strAnyDatabase = '�ҹ��������';
$strAnyHost = '��ʵ���';
$strAnyTable = '���ҧ��';
$strAnyUser = '�������';
$strAscending = '������ҡ';
$strAtBeginningOfTable = '���ش������鹢ͧ���ҧ';
$strAtEndOfTable = '���ش�ش���¢ͧ���ҧ';
$strAttr = '�͵��Ժ�ǵ�';

$strBack = '��͹��Ѻ';
$strBeginCut = '������ش�Ѵ';
$strBeginRaw = '����������ŴԺ';
$strBinary = ' ������亹��� ';
$strBinaryDoNotEdit = ' ������亹��� - ������� ';
$strBookmarkDeleted = 'ź�Ӥ鹷�訴������º��������';
$strBookmarkLabel = '���ª���';
$strBookmarkQuery = '�Ӥ鹹��١���������';
$strBookmarkThis = '���Ӥ鹹�����';
$strBookmarkView = '�����ҧ����';
$strBrowse = '�Դ��';
$strBzError = 'phpMyAdmin �������ö�պ�Ѵ������ dump �� ���ͧ�ҡ��ǹ���� Bz2 � php ��蹹��������. ���й������ҧ����������á�տ <code>$cfg[\'BZipDump\']</code> ����͹�ԡ�ͧ phpMyAdmin �� <code>FALSE</code>. ��Ҥس��ͧ��÷������������ö�ͧ��ǹ���¡�úպ�Ѵ Bz2, �س��è��Ѿ�ô php ����蹶Ѵ�. ��������´������ php bug report %s.';
$strBzip = '"bzipped"';

$strCSVOptions = '������͡ CSV';
$strCannotLogin = '�������ö��͡�Թ������������ MySQL ��';
$strCantLoad = '�������ö���¡��ǹ���� %s,<br />��سҵ�Ǩ�ͺ��õ�駤���ͧ PHP';
$strCantLoadMySQL = '�������ö���¡���Ǫ��¢ͧ MySQL,<br />��سҵ�Ǩ�ͺ��õ�駤�Ңͧ PHP';
$strCantLoadRecodeIconv = '�������ö���¡���Ǫ��� iconv ���� recode �����ŧ�ش����ѡ��, �ҧ���͡: 1) ��駤����� PHP ����ö���Ǫ�������ҹ���� ���� 2) ��駤����� phpMyAdmin ����ͧ�ŧ�ش����ѡ��';
$strCantRenameIdxToPrimary = '����¹���ʹѪ���� PRIMARY �����!';
$strCantUseRecodeIconv = '�������ö��ѧ���� iconv ���� libiconv ���� recode_string ���� �������ö���¡��Ǫ��� ����Ѻ�ѧ��������ҹ�鹢����������. �ͧ��Ǩ�ͺ��õ�駤�Ңͧ PHP';
$strCardinality = 'Cardinality';
$strCarriage = '�Ѵ���: \\r';
$strChange = '����¹';
$strChangeCopyMode = '���ҧ��������� ������Է������͹�ѹ ��� ...';
$strChangeCopyModeCopy = '... �红ͧ������.';
$strChangeCopyModeJustDelete = ' ... ź�ͧ��ҷ��仨ҡ���ҧ�����.';
$strChangeCopyUser = '����¹���������͡�Թ / �����Ҽ����';
$strChangeDisplay = '���͡��Ŵ����ͧ����ʴ�';
$strChangePassword = '����¹���ʼ�ҹ';
$strCharsetOfFile = '�ش�ѡ��Тͧ��� (character set):';
$strCheckAll = '���͡������';
$strCheckDbPriv = '��Ǩ�ͺ�Է��㹰ҹ������';
$strCheckPrivs = '��Ǩ�ͺ�Է��';
$strCheckPrivsLong = '��Ǩ�ͺ�Է������Ѻ�ҹ������ &quot;%s&quot;.';
$strCheckTable = '��Ǩ�ͺ���ҧ';
$strChoosePage = '���͡˹�ҷ���ͧ������';
$strColComFeat = '�ʴ������˵آͧ�������';
$strColumn = '�������';
$strColumnNames = '���ͤ������';
$strColumnPrivileges = '�Է��੾�Ф������';
$strCommand = '�����';
$strComments = '�����˵�';
$strCompleteInserts = '����� INSERT ����ٻẺ';
$strCompression = '�պ�Ѵ������';
$strConfigFileError = 'phpMyAdmin �������ö��ҹ���͹�ԡ��ê�蹢ͧ�س��<br />�»��� �Ҩ�������е�� PHP ���������� �����������ö�����ż� (parse) �����<br />�ͧ���¡���͹�ԡ��ê�蹢�����µç (���ԧ���ҹ��ҧ) ��д������ error message �����������  �ͧ��Ǩ�ͺ������ͧ���� quote ���� semicolon ������ú��������<br />��Ҥس���˹����ҧ� �ʴ���ҷء���ҧ�繻��Դ�';
$strConfigureTableCoord = '��سҵ�駤��������๵�ͧ���ҧ %s';
$strConfirm = '�س�׹�ѹ���з���觹��?';
$strConnections = '�����������';
$strCookiesRequired = '��ͧ͹حҵ���� \'��ꡡ��\' (cookie) ���¡�͹ �֧�м�ҹ�ش������';
$strCopyTable = '�Ѵ�͡���ҧ��ѧ (�ҹ������<b>.</b>���ҧ):';
$strCopyTableOK =  '�Ѵ�͡���ҧ %s ���㹪��� %s ���º��������.';
$strCreate = '���ҧ';
$strCreateIndex = '���ҧ�Ѫ���¤������ %s';
$strCreateIndexTopic = '���ҧ�Ѫ������';
$strCreateNewDatabase = '���ҧ�ҹ����������';
$strCreateNewTable = '���ҧ���ҧ㹰ҹ�����Ź�� %s';
$strCreatePage = '�����˹������';
$strCreatePdfFeat = '������ҧ�͡��� PDF';
$strCriteria = '���͹�';

$strDBComment = '�����˵آͧ�ҹ������: ';
$strDBGContext = '�͹�硫�';
$strDBGContextID = '�����Ţ�͹�硫�';
$strDBGHits = '�Ե';
$strDBGLine = '��÷Ѵ';
$strDBGMaxTimeMs = '�����ҡ�ش, ������Թҷ�';
$strDBGMinTimeMs = '���ҹ����ش, ������Թҷ�';
$strDBGModule = '�����';
$strDBGTimePerHitMs = '����/�Ե, ������Թҷ�';
$strDBGTotalTimeMs = '���ҷ�����, ������Թҷ�';
$strData = '������';
$strDataDict = '���ҹء��������';
$strDataOnly = '੾�Т�����';
$strDatabase = '�ҹ������ ';
$strDatabaseHasBeenDropped = '�¹�ҹ������ %s �������º��������';
$strDatabaseWildcard = '�ҹ������ (�� wildcards ��):';
$strDatabases = '�ҹ������';
$strDatabasesDropped = '%s �ҹ��������١�������º��������.';
$strDatabasesStats = 'ʶԵ԰ҹ������';
$strDatabasesStatsDisable = '¡��ԡ�����ʶԵ�';
$strDatabasesStatsEnable = '����ա����ʶԵ�';
$strDbPrivileges = '�Է����Ш�੾�аҹ������';
$strDbSpecific = '੾�аҹ������';
$strDefault = '��һ�����';
$strDelete = 'ź';
$strDeleteAndFlushDescr = '������Ըշ�����������ش ������Ŵ�Է����ҹ���� �е�ͧ�������ѡ����.';
$strDeleteFailed = 'ź��������!';
$strDeleteUserMessage = '�س��ź����� %s �����';
$strDeleted = 'ź���º��������';
$strDeletedRows = '�Ƿ��١ź:';
$strDeleting = '���ѧź %s';
$strDescending = '�ҡ仹���';
$strDisabled = '�ЧѺ���������';
$strDisplay = '�ʴ���';
$strDisplayFeat = '��������ö��ҹ����ʴ���';
$strDisplayOrder = '�ӴѺ����ʴ�:';
$strDisplayPDF = '�ʴ�ʡ��Ңͧ PDF';
$strDoAQuery = '�� "�Ӥ鹨ҡ������ҧ" (wildcard: "%")';
$strDoYouReally = '��ͧ��è� ';
$strDocu = '�͡�����ҧ�ԧ';
$strDrop = '�¹���';
$strDropDB = '�¹�ҹ������ %s ���';
$strDropSelectedDatabases = '�¹�ҹ�����ŷ�����͡�����';
$strDropTable = '�¹���ҧ���';
$strDropUsersDb = '�¹�ҹ�����ŷ���ժ������ǡѺ�������.';
$strDumpComments = '��������˵آͧ������� ����͹�� inline SQL-comments';
$strDumpXRows = '������� %s �� ���������� %s';
$strDumpingData = 'dump ���ҧ';
$strDynamic = '��褧���';

$strEdit = '���';
$strEditPDFPages = '���˹�� PDF';
$strEditPrivileges = '����Է��';
$strEffective = '�ռ�';
$strEmpty = 'ź������';
$strEmptyResultSet = 'MySQL �׹���Ѿ����ҧ���ҡ�Ѻ�� (null / 0 ��).';
$strEnabled = '�Դ������';
$strEnd = '�����ش';
$strEndCut = '����ش�ش�Ѵ';
$strEndRaw = '����ش�����ŴԺ';
$strEnglishPrivileges = ' �ô��Һ: ���ͧ͢�Է��� MySQL ���ʴ��������ѧ��� ';
$strError = '�Դ��Ҵ';
$strExplain = '͸Ժ�� SQL';
$strExport = '���͡';
$strExportToXML = '���͡���ٻẺ XML';
$strExtendedInserts = '�á��������¹㹤�������';
$strExtra = '�������';

$strFailedAttempts = '�����������������';
$strField = '��Ŵ�';
$strFieldHasBeenDropped = '�¹��Ŵ� %s �������º��������';
$strFields = '�ӹǹ��Ŵ�';
$strFieldsEmpty = ' �ӹǹ��Ŵ��� ��ҧ����! ';
$strFieldsEnclosedBy = '�������Ŵ����';
$strFieldsEscapedBy = '����ͧ��������Ѻ escape char';
$strFieldsTerminatedBy = '����Ŵ����';
$strFileCouldNotBeRead = '��ҹ��������';
$strFixed = '�����';
$strFlushTable = '��ҧ���ҧ (flush)';
$strFormEmpty = '����Ẻ��������� !';
$strFormat = '�ٻẺ';
$strFullText = '��駢�ͤ���';
$strFunction = '�ѧ����';

$strGenBy = '���ҧ��';
$strGenTime = '����㹡�����ҧ';
$strGeneralRelationFeat = '��������ö��ҹ���Ūѹ�����';
$strGlobal = '�ź��';
$strGlobalPrivileges = '�Է��Ẻ�ź��';
$strGlobalValue = '���Ẻ�ź��';
$strGo = 'ŧ���';
$strGrantOption = '�ͺ�Է��';
$strGrants = '͹حҵ';
$strGzip = '"gzipped"';

$strHasBeenAltered = '����¹��������';
$strHasBeenCreated = '���ҧ��������';
$strHaveToShow = '��ͧ���͡����ʴ����ҧ����˹�觤������';
$strHome = '˹�Һ�ҹ';
$strHomepageOfficial = '���ྨ���ҧ�繷ҧ��âͧ phpMyAdmin';
$strHomepageSourceforge = '˹�Ҵ�ǹ���Ŵ phpMyAdmin ��� Sourceforge';
$strHost = '��ʵ�';
$strHostEmpty = '������ʵ��ѧ��ҧ����!';

$strId = 'ID';
$strIdxFulltext = '��ͤ������ (fulltext)';
$strIfYouWish = '��ҵ�ͧ������¡�� ੾�кҧ������� ����к���ª��Ϳ�Ŵ��Ҵ��� (������Ъ��ʹ�������ͧ�����١���)';
$strIgnore = '���ʹ�';
$strIgnoringFile = '���ʹ���� %s';
$strImportDocSQL = '�������� docSQL';
$strImportFiles = '��������';
$strImportFinished = '�������������';
$strInUse = '������';
$strIndex = '�Ѫ��';
$strIndexHasBeenDropped = '�¹�Ѫ�� %s �������º��������';
$strIndexName = '���ʹѪ�� :';
$strIndexType = '��Դ�ͧ�Ѫ�� :';
$strIndexes = '�Ѫ��';
$strInsecureMySQL = '�ҡ����纤�ҡ�˹��ͧ�س �س����������ʼ�ҹ����Ѻ root ��觨ж١���繪��ͻ����«�����Է�Ծ����.  ��������� MySQL ���ӧҹ���¤�һ����¹�� �Ҩ�١�ء�ء�� �س��è�����������ѹ���ѹ�� ���ͤ�����ʹ���';
$strInsert = '�á';
$strInsertAsNewRow = '�á��������';
$strInsertNewRow = '�á������';
$strInsertTextfiles = '�á�����Ũҡ����ͤ�������㹵��ҧ';
$strInsertedRows = '�Ƿ��١�á:';
$strInstructions = '�Ը���';
$strInvalidName = '"%s" �繤�ʧǹ �������駪��� �ҹ������/ ���ҧ/��Ŵ� �����';

$strJumpToDB = '���ⴴ价��ҹ������ &quot;%s&quot;.';
$strJustDelete = '��ź������͡�ҡ���ҧ�ʴ��Է����Ҷ֧';

$strKeepPass = '��س���������¹���ʼ�ҹ';
$strKeyname = '���ͤ���';
$strKill = '��ҷ��';

$strLaTeX = 'LaTeX';
$strLandscape = '�ǹ͹';
$strLength = '�������';
$strLengthSet = '�������/૵*';
$strLimitNumRows = '����¹���˹��';
$strLineFeed = '��鹺�÷Ѵ����: \\n';
$strLines = '��÷Ѵ';
$strLinesTerminatedBy = '���Ǵ���';
$strLinkNotFound = '��辺�ԧ��';
$strLinksTo = '�������ѧ';
$strLocalhost = '�Ť��';
$strLocationTextfile = '���͡����ͤ����ҡ';
$strLogPassword = '���ʼ�ҹ:';
$strLogUsername = '���ͼ����:';
$strLogin = '�������к�';
$strLoginInformation = '��������͡�Թ';
$strLogout = '�͡�ҡ�к�';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'MIME-types ���������';
$strMIME_available_transform = '����ŧ������¡����';
$strMIME_description = '��������´';
$strMIME_file = '�������';
$strMIME_nodescription = '����ҡ���������´����Ѻ����ŧ���.<br />��س��ͺ��������¹���,  %s ������.';
$strMissingBracket = 'ǧ��纡����� [] ���ú';
$strModifications = '�ѹ�֡���������º��������';
$strModify = '���';
$strModifyIndexTopic = '��䢴Ѫ��';
$strMoreStatusVars = 'More status variables';
$strMoveTable = '���µ��ҧ� (database<b>.</b>table):';
$strMoveTableOK = '���ҧ %s �١����� %s ����';
$strMySQLCharset = '�ش����ѡ�� (charset) �ͧ MySQL';
$strMySQLReloaded = '���¡ MySQL �������������';
$strMySQLSaid = 'MySQL �ʴ�: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �ӧҹ���躹 %pma_s2% 㹪��� %pma_s3%';
$strMySQLShowProcess = '�ʴ��ҹ��������ͧ MySQL';
$strMySQLShowStatus = '�ʴ�ʶҹТͧ MySQL';
$strMySQLShowVars = '�ʴ�������к��ͧ MySQL';

$strName = '����';
$strNext = '����';
$strNo = '���';
$strNoDatabases = '����հҹ������';
$strNoDatabasesSelected = '�ѧ��������͡�ҹ������.';
$strNoDescription = '�������������´';
$strNoDropDatabases = '����� "DROP DATABASE" �١�Դ���';
$strNoExplain = '����ͧ͸Ժ�� SQL';
$strNoFrames = '���������<b>�������</b> �Ъ�������� phpMyAdmin ����¢��';
$strNoIndex = '�ѧ������˹��Ѫ����!';
$strNoIndexPartsDefined = '������˹���ǹ�� �ͧ�Ѫ��!';
$strNoModification = '����ա������¹�ŧ';
$strNoOptions = '�ٻẺ�������յ�����͡';
$strNoPassword = '��������ʼ�ҹ';
$strNoPhp = '�������� PHP';
$strNoPrivileges = '������Է��';
$strNoQuery = '����դӤ� SQL!';
$strNoRights = '�س������Է�Է�������ҵç���!';
$strNoTablesFound = '��辺���ҧ� � 㹰ҹ������';
$strNoUsersFound = '��辺�������.';
$strNoUsersSelected = '�ѧ��������͡��������.';
$strNoValidateSQL = '����ͧ��Ǩ�ͺ SQL';
$strNone = '�����';
$strNotNumber = '��ҹ����������Ţ!';
$strNotOK = '��赡ŧ';
$strNotSet = '��辺���ҧ <b>%s</b> � %s';
$strNotValidNumber = ' ����������Ţ�Ƿ��١��ͧ!';
$strNull = '��ҧ���� (null)';
$strNumSearchResultsInTable = '�� %s ���Ѿ����ç㹵��ҧ <i>%s</i>';
$strNumSearchResultsTotal = '<b>���:</b> <i>%s</i> ���Ѿ����ç';
$strNumTables = '���ҧ';

$strOK = '��ŧ';
$strOftenQuotation = '�»��Ԩ�������ͧ�����ѭ��С�� (����ͧ���¤Ӿٴ)<br />"��ҷ�����" ���¶֧ ����������ͧ���¤���� ੾�СѺ��Ŵ쪹Դ char ��� varchar ��ҹ��';
$strOperations = '��кǹ���';
$strOptimizeTable = '��Ѻ�觵��ҧ';
$strOptionalControls = '��˹���Ҩ���¹ ������ҹ����ѡ��о���� ���ҧ��';
$strOptionally = '��ҷ�����';
$strOptions = '������͡';
$strOr = '����';
$strOverhead = '�Թ��������';

$strPHP40203 = '�س���ѧ�� PHP ��� 4.2.3, ����պ�������ç����ǡѺ multi-byte strings (mbstring). ��سҴ���§ҹ��� PHP �����Ţ 19404. �������й����س�� PHP ��蹹��Ѻ phpMyAdmin.';
$strPHPVersion = '��蹢ͧ PHP';
$strPageNumber = '�����Ţ˹��:';
$strPartialText = '��ͤ����ҧ��ǹ';
$strPassword = '���ʼ�ҹ';
$strPasswordChanged = '����¹���ʼ�ҹ�ͧ %s ���º��������';
$strPasswordEmpty = '���ʼ�ҹ�ѧ��ҧ����!';
$strPasswordNotSame = '���ʼ�ҹ���ç�ѹ!';
$strPdfDbSchema = 'schema �ͧ�ҹ������ "%s" - ˹�� %s';
$strPdfInvalidPageNum = '�ѧ������˹��Ţ˹�Ңͧ PDF!';
$strPdfInvalidTblName = '����յ��ҧ "%s"!';
$strPdfNoTables = '����յ��ҧ';
$strPerHour = '��ͪ������';
$strPhp = '���ҧ�� PHP';
$strPmaDocumentation = '�͡��á���� phpMyAdmin';
$strPmaUriError = '<b>��ͧ</b>��˹���� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ����͹�ԡ��ê�����¡�͹';
$strPortrait = '�ǵ��';
$strPos1 = '�ش�������';
$strPrevious = '��͹˹��';
$strPrimary = '������';
$strPrimaryKey = '�����դ���';
$strPrimaryKeyHasBeenDropped = '�¹�����դ���������º��������';
$strPrimaryKeyName = '���ͧ͢�����դ��� �е�ͧ�� PRIMARY ��ҹ��';
$strPrimaryKeyWarning = '(���ͧ͢�����դ���<b>�е�ͧ��</b> "PRIMARY" ��ҹ��!)';
$strPrint = '�����';
$strPrintView = '�ʴ�';
$strPrivDescAllPrivileges = '����Է�Էء���ҧ ¡��鹡������Է��������� (GRANT).';
$strPrivDescAlter = '͹حҵ�������¹�ç���ҧ�ͧ���ҧ������������.';
$strPrivDescCreateDb = '͹حҵ������ҧ�ҹ������ ��е��ҧ����.';
$strPrivDescCreateTbl = '͹حҵ������ҧ���ҧ����.';
$strPrivDescCreateTmpTable = '͹حҵ������ҧ���ҧ���Ǥ���.';
$strPrivDescDelete = '͹حҵ���ź������';
$strPrivDescDropDb = '͹حҵ����駰ҹ������ ��е��ҧ';
$strPrivDescDropTbl = '͹حҵ����駵��ҧ';
$strPrivDescExecute = '͹حҵ����ѹ stored procedure (����ռ�� MySQL ��蹹��)';
$strPrivDescFile = '͹حҵ������Ң����� ������͡������ 价�����';
$strPrivDescGrant = '͹حҵ������������ ����Է����Ҷ֧ ������ͧ���¡����ҧ�Է������';
$strPrivDescIndex = '͹حҵ������ҧ ��з�� �Ѫ��';
$strPrivDescInsert = '͹حҵ������� ���᷹��� ������';
$strPrivDescLockTables = '͹حҵ�����͡���ҧ����Ѻ�ô�Ѩ�غѹ';
$strPrivDescMaxConnections = '�ӡѴ�ӹǹ��������������� ������������ö�Դ�� ��ͪ������';
$strPrivDescMaxQuestions = '�ӡѴ�ӹǹ�ͧ�Ӥ� ������������ö���ҷ������������� ��ͪ������';
$strPrivDescMaxUpdates = '�ӡѴ�ӹǹ�ͧ����� ��������¹�ŧ���ҧ ���Ͱҹ�������� ������������ö����� ��ͪ������';
$strPrivDescProcess3 = '͹حҵ����������ʢͧ��������';
$strPrivDescProcess4 = '͹حҵ���٤Ӥ鹷��������¡������';
$strPrivDescReferences = '����ռ�� MySQL ��蹹��';
$strPrivDescReload = '͹حҵ������¡���ҡ�˹��ͧ������������� �����ҧᤪ�ͧ���������';
$strPrivDescSelect = '͹حҵ������ҹ��������.';
$strPrivDescShowDb = '����ö���¡����¡�ðҹ�����ŷ�������';
$strPrivDescShutdown = '͹حҵ���Դ�����������';
$strPrivDescUpdate = '͹حҵ�������¹��������.';
$strPrivDescUsage = '������Է����.';
$strPrivileges = '�Է��';
$strPrivilegesReloaded = '�Է����١���¡���������º��������';
$strProcesslist = '��¡������';
$strProperties = '�س���ѵ�';
$strPutColNames = '�����Ϳ�Ŵ������á';

$strQBE = '�Ӥ鹨ҡ������ҧ';
$strQBEDel = 'ź';
$strQBEIns = '����';
$strQueryFrame = '˹�ҵ�ҧ�Ӥ�';
$strQueryFrameDebug = '�����Ŵպѡ';
$strQueryOnDb = '�Ӥ鹺��ҹ������ <b>%s</b>:';
$strQuerySQLHistory = 'SQL-history';
$strQueryStatistics = '<b>ʶԵԤӤ�</b>: �� %s �Ӥ� �١��价����������� �Ѻ�����������к�.';
$strQueryTime = '�Ӥ������� %01.4f �Թҷ�';
$strQueryType = '��Դ�Ӥ�';

$strReType = '���������';
$strReceived = '���Ѻ';
$strRecords = '����¹';
$strReferentialIntegrity = '��Ǩ�ͺ��������ó�ͧ�����ҧ�֧:';
$strRelationNotWorking = '��������ö�����������Ѻ linked Tables ��١�ЧѺ������ ����˵ؼŷ�������� %shere%s';
$strRelationView = '����ͧ���Ūѹ';
$strRelationalSchema = '���Ūѹ�� ʡ���';
$strReloadFailed = '����Ŵ MySQL ������������';
$strReloadMySQL = '����Ŵ MySQL ����';
$strReloadingThePrivileges = '��Ѻ��ا�Է����Ҷ֧�����ա�ͺ';
$strRememberReload = '�����������Ŵ��������������ա����';
$strRemoveSelectedUsers = '�͹����������͡';
$strRenameTable = '����¹���͵��ҧ��';
$strRenameTableOK = '���ҧ %s ��١����¹������ %s';
$strRepairTable = '���������ҧ';
$strReplace = '��¹�Ѻ';
$strReplaceTable = '��¹�Ѻ���¢����Ũҡ���';
$strReset = '���������';
$strResourceLimits = '�մ�ӡѴ�ͧ��Ѿ�ҡ�';
$strRevoke = '�ԡ�͹';
$strRevokeGrant = '�ԡ�͹���͹حҵ';
$strRevokeGrantMessage = '�س���ԡ�͹���͹حҵ�ͧ %s';
$strRevokeMessage = '�س���ԡ�͹�Է�Ԣͧ %s';
$strRevokePriv = '�ԡ�͹�Է��';
$strRowLength = '���������';
$strRowSize = ' ��Ҵ�� ';
$strRows = '��';
$strRowsFrom = '�� ������ҡ�Ƿ��';
$strRowsModeFlippedHorizontal = '�ǹ͹ (��ع�������ͧ)';
$strRowsModeHorizontal = '�ǹ͹';
$strRowsModeOptions = '����� %s ��Ы������Ƿء� %s ����';
$strRowsModeVertical = '�ǵ��';
$strRowsStatistic = 'ʶԵԢͧ��';
$strRunQuery = '�����żŤӤ�';
$strRunSQLQuery = '�����żŤӤ鹺��ҹ������ %s';
$strRunning = '�ӧҹ���躹 %s';

$strSQL = 'SQL';
$strSQLOptions = '������͡ SQL';
$strSQLParserBugMessage = '�Ҩ���ա������¹�ŧ�ҧ���ҧ ���س������ѹ�繢�ͼԴ��Ҵ�ͧ�����ҹ����� SQL. ��سҵ�Ǩ�ͺ�Ӥ鹢ͧ�س������ǹ ��੾�С���Դ/�Դ����ͧ���¤Ӿٴ (quotes) ���١��ͧ. �ա���˵�˹�觷��������� �س�Ҩ���Ѿ��Ŵ���亹��բ�ҧ�͡��ǧ�ͧ����ͧ���¤Ӿٴ. �س����ö�����ͧ�Ӥ鹢ͧ�س������ҹ���Ź�ͧ MySQL ��觤س�Ҩ�о���ͼԴ��Ҵ�ҧ���ҧ㹹��. �ҡ MySQL server ���駢�ͼԴ��Ҵ�Ҵ�ҹ��ҧ��� ����ͧ��ҹ�� �ѹ�Ҩ�Ъ������س�ԹԨ��»ѭ����բ��. ��Ҥس�ѧ���ѭ�ҡѺ parser � phpMyAdmin ���� ����辺�ѭ�ҡѺ parser � command line, ����ͧŴ������Ǣͧ�Ӥ� SQL ŧ ����з������ͤӤ� SQL ������ ����ѧ������Դ�ѭ�������ա, �����駢�ͼԴ��Ҵ�ѧ������ҷ����� ���ѹ�Ҿ�����Ѻ��Ǣ����ŷ��س�� �����ҡ��ǹ�ͧ CUT ��ҹ��ҧ.';
$strSQLParserUserError = '�Ҩ���բ�ͼԴ��Ҵ�ҧ���ҧ㹤Ӥ� SQL �ͧ�س. �ҡ MySQL server ���駢�ͼԴ��Ҵ�Ҵ�ҹ��ҧ��� ����ͧ��ҹ�� �ѹ�Ҩ�Ъ������س�ԹԨ��»ѭ����բ��';
$strSQLQuery = '�Ӥ� SQL';
$strSQLResult = '���Ѿ�� SQL';
$strSQPBugInvalidIdentifer = '���͵�������١��ͧ';
$strSQPBugUnclosedQuote = '�����Դ����ͧ���¤Ӿٴ';
$strSQPBugUnknownPunctuation = '������ͧ������ä�͹���������ѡ';
$strSave = '�ѹ�֡';
$strScaleFactorSmall = '�ѵ����͹����Թ� ���ШѴ���ʡ��������˹������';
$strSearch = '����';
$strSearchFormTitle = '����㹰ҹ������';
$strSearchInTables = '㹵��ҧ:';
$strSearchNeedle = '�� ���� ��ҷ���ͧ��ä��� (wildcard: "%"):';
$strSearchOption1 = '���ҧ����˹�觤�';
$strSearchOption2 = '�ء��';
$strSearchOption3 = '����͹������';
$strSearchOption4 = '�ٻẺ�Ӿ�ͧ (regular expression)';
$strSearchResultsFor = '�š�ä��� "<i>%s</i>" %s:';
$strSearchType = '��:';
$strSelect = '���͡';
$strSelectADb = '�ô���͡�ҹ������';
$strSelectAll = '���͡������';
$strSelectFields = '���͡��Ŵ� (���ҧ����˹�觿�Ŵ�):';
$strSelectNumRows = '㹤Ӥ�';
$strSelectTables = '���͡���ҧ';
$strSend = '���������';
$strSent = '�١��';
$strServer = '��������� %s';
$strServerChoice = '������͡���������';
$strServerStatus = '�������ѹ���';
$strServerStatusUptime = '��������� MySQL ����ѹ�������� %s. ������͹ %s.';
$strServerTabProcesslist = '����';
$strServerTabVariables = '�����';
$strServerTrafficNotes = '<b>��è�Ҩâͧ���������</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = '����� ��Ф�ҡ�˹� �ͧ���������';
$strServerVersion = '��蹢ͧ���������';
$strSessionValue = '����ʪ��';
$strSetEnumVal = '��Ҫ�Դ�ͧ��Ŵ��� "enum" ���� "set" �ô����ҵ���ٻẺ: \'a\',\'b\',\'c\'...<br />��ҵ�ͧ����������ͧ���� backslash ("\\") ���� �ѭ��С������� ("\'") ����㹤������ҹ�� ����������ͧ���� ����Ū ��˹�� (������ҧ: \'\\\\xyz\' or \'a\\\'b\')';
$strShow = '�ʴ�';
$strShowAll = '�ʴ�������';
$strShowColor = '�ʴ���';
$strShowCols = '�ʴ��������';
$strShowDatadictAs = '�ٻẺ���ҹء��������';
$strShowGrid = '�ʴ���Դ';
$strShowPHPInfo = '�ʴ������Ţͧ PHP';
$strShowTableDimension = '�ʴ��ԵԢͧ���ҧ';
$strShowTables = '�ʴ����ҧ';
$strShowThisQuery = ' �ʴ��Ӥ鹹���ա�� ';
$strShowingRecords = '�ʴ�����¹��� ';
$strSingly = '(�����)';
$strSize = '��Ҵ';
$strSort = '���§';
$strSpaceUsage = '���ͷ������';
$strSplitWordsWithSpace = '�Ӷ١�觴��ª�ͧ��ҧ (" ").';
$strStatement = '�����';
$strStatus = 'ʶҹ�';
$strStrucCSV = '������ CSV (��蹴�������ͧ�����١��� ",")';
$strStrucData = '����ç���ҧ��Т�����';
$strStrucDrop = '��������� \'drop table\'';
$strStrucExcelCSV = '������ CSV ����Ѻ���ëͿ�������';
$strStrucOnly = '੾���ç���ҧ';
$strStructPropose = '�ʹ��ç���ҧ���ҧ';
$strStructure = '�ç���ҧ';
$strSubmit = '��';
$strSuccess = '�ӤӤ��������º��������';
$strSum = '�����';

$strTable = '���ҧ ';
$strTableComments = '�����˵آͧ���ҧ';
$strTableEmpty = '���͵��ҧ�ѧ��ҧ����!';
$strTableHasBeenDropped = '�¹���ҧ %s �������º��������';
$strTableHasBeenEmptied = 'ź������㹵��ҧ %s ���º��������';
$strTableHasBeenFlushed = '��ҧ���ҧ %s ���º��������';
$strTableMaintenance = '��ô����ѡ�ҵ��ҧ';
$strTableOfContents = '��úѭ';
$strTableStructure = '�ç���ҧ���ҧ';
$strTableType = '��Դ���ҧ';
$strTables = '%s ���ҧ';
$strTblPrivileges = '�Է����Ш�੾�е��ҧ';
$strTextAreaLength = '���ͧ�ҡ������Ǣͧ�ѹ <br />��Ŵ��� ����Ҩ�����';
$strTheContent = '���á������ �ҡ���ͧ�س���º��������';
$strTheContents = '����Ѻ�Ƿ���������դ��� ���� unique key ����͹�ѹ �����Ҩҡ��� ��᷹������������㹵��ҧ';
$strTheTerminator = '�ش����ش�ͧ��Ŵ�';
$strThisHost = '��ʵ���';
$strThisNotDirectory = '����������á����';
$strThreadSuccessfullyKilled = '�ô %s �١��������º��������.';
$strTime = '����';
$strTotal = '������';
$strTotalUC = '���';
$strTraffic = '��è�Ҩ�';
$strType = '��Դ';

$strUncheckAll = '������͡���';
$strUnique = '�͡�ѡɳ�';
$strUnselectAll = '������͡���';
$strUpdatePrivMessage = '�س���Ѻ��ا�Է������Ѻ %s ����';
$strUpdateProfile = '��Ѻ��ا�����:';
$strUpdateProfileMessage = '��Ѻ��ا��������º��������';
$strUpdateQuery = '��Ѻ��ا�Ӥ�';
$strUsage = '��ҹ';
$strUseBackquotes = '��� \'backqoute\' ���Ѻ���͵��ҧ��п�Ŵ�';
$strUseTables = '����ҧ';
$strUseTextField = '���ͧ����ͤ��� (text field)';
$strUser = '�����';
$strUserAlreadyExists = '�ռ���� %s ��������!';
$strUserEmpty = '���ͼ�����ѧ��ҧ����!';
$strUserName = '���ͼ����';
$strUserNotFound = '����������͡ ��辺㹵��ҧ�ʴ��Է��';
$strUserOverview = '�����ŷ���仢ͧ�����';
$strUsers = '�����';
$strUsersDeleted = 'ź����������͡������º��������.';
$strUsersHavingAccessToDb = '��������Է����Ҷ֧�ҹ������ &quot;%s&quot;';

$strValidateSQL = '��Ǩ�ͺ SQL';
$strValidatorError = '�������ö�������ǵ�Ǩ�ͺ SQL ��. ��سҵ�Ǩ�ͺ��� �س��Դ��� php extensions ������ �ѧ���͸Ժ������ %sdocumentation%s ���º��������';
$strValue = '���';
$strVar = '�����';
$strViewDump = '���ç���ҧ�ͧ���ҧ';
$strViewDumpDB = '���ç���ҧ�ͧ�ҹ������';

$strWebServerUploadDirectory = '��á��������Ѻ�Ѿ��Ŵ ����Ǻ���������';
$strWebServerUploadDirectoryError = '�������ö��ҹ ��á���շ�����������Ѻ�Ѿ��Ŵ��';
$strWelcome = '%s �Թ�յ�͹�Ѻ';
$strWildcard = '�������';
$strWithChecked = '�ӡѺ������͡:';
$strWritingCommentNotPossible = '�����¹�����˵ع����������';
$strWritingRelationNotPossible = '�����¹���Ūѹ�����������';
$strWrongUser = '͹حҵ������������� ���ͼ�����������ʼ�ҹ�Դ';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '�ô��Һ: �������¹�������ҹ���� 0 (�ٹ��) �����¶֧ ����բմ�ӡѴ.';
$strZip = '"�١�պ�Ѵ���� (zip)"';
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate

$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strAutomaticLayout = 'Automatic layout';  //to translate

$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate

$strDatabasesStatsHeavyTraffic = '�ô��Һ: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate

$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFlushPrivilegesNote = '�ô��Һ: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strInnodbStat = 'InnoDB Status';  //to translate

$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate

$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSuper = '͹حҵ�����������, �����Ҩӹǹ����������ͨж֧�дѺ�٧�ش����; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate

$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate

$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate

$strStatCheckTime = 'Last check';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate

$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__unformatted = '�ʴ��� HTML �� HTML entities. No HTML formatting is shown.';//to translate

$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays a link to an external image; the field contains the filename; first option is a prefix like "http://domain.com/"';  //to translate
?>
