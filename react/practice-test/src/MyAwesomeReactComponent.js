import React, {Component} from 'react';
import RaisedButton from 'material-ui/RaisedButton';
import Checkbox from 'material-ui/Checkbox';
import AppBar from 'material-ui/AppBar';
import IconButton from 'material-ui/IconButton';
import NavigationClose from 'material-ui/svg-icons/navigation/close';
// import FlatButton from 'material-ui/FlatButton';
import AutoComplete from 'material-ui/AutoComplete';
import MenuItem from 'material-ui/MenuItem';
import Avatar from 'material-ui/Avatar';
import FileFolder from 'material-ui/svg-icons/file/folder';
// import FontIcon from 'material-ui/FontIcon';
import List from 'material-ui/List/List';
import ListItem from 'material-ui/List/ListItem';
import {
    blue300,
    indigo900,
    orange200,
    deepOrange300,
    pink400,
    purple500,
  } from 'material-ui/styles/colors';
import Badge from 'material-ui/Badge';
// import IconButton from 'material-ui/IconButton';
import UploadIcon from 'material-ui/svg-icons/file/cloud-upload';
import FolderIcon from 'material-ui/svg-icons/file/folder-open';
import NotificationsIcon from 'material-ui/svg-icons/social/notifications';
import FontIcon from 'material-ui/FontIcon';
import {BottomNavigation, BottomNavigationItem} from 'material-ui/BottomNavigation';
// import Paper from 'material-ui/Paper';
import IconLocationOn from 'material-ui/svg-icons/communication/location-on';
import FlatButton from 'material-ui/FlatButton';
import ActionAndroid from 'material-ui/svg-icons/action/android';

import {fullWhite} from 'material-ui/styles/colors';
// import RaisedButton from 'material-ui/RaisedButton';

import {Card, CardActions, CardHeader, CardMedia, CardTitle, CardText} from 'material-ui/Card';
import Toggle from 'material-ui/Toggle';

import DatePicker from 'material-ui/DatePicker';
import Dialog from 'material-ui/Dialog';

import Divider from 'material-ui/Divider';
import Paper from 'material-ui/Paper';
import TextField from 'material-ui/TextField';
import Drawer from 'material-ui/Drawer';
import StarBorder from 'material-ui/svg-icons/toggle/star-border';
import {GridList, GridTile} from 'material-ui/GridList';
// import Paper from 'material-ui/Paper';
import CircularProgress from 'material-ui/CircularProgress';
import Slider from 'material-ui/Slider';
import {
    Table,
    TableBody,
    TableHeader,
    TableHeaderColumn,
    TableRow,
    TableRowColumn,
  } from 'material-ui/Table';
  
  import {Tabs, Tab} from 'material-ui/Tabs';
  import MapsPersonPin from 'material-ui/svg-icons/maps/person-pin';
const recentsIcon = <FontIcon className="material-icons">restore</FontIcon>;
const favoritesIcon = <FontIcon className="material-icons">favorite</FontIcon>;
const nearbyIcon = <IconLocationOn />;



function handleTouchTap() {
    alert('onTouchTap triggered on the title component');
  }
  
  const styles = {
    title: {
      cursor: 'pointer',
    }
  };

export const AppBarExampleIconButton = () => (
    <AppBar
      title={<span style={styles.title}>Title</span>}
      onTitleTouchTap={handleTouchTap}
      iconElementLeft={<IconButton><NavigationClose /></IconButton>}
      iconElementRight={<FlatButton label="Save" />}
    />
  );  
export const StylesOverridingInlineExample = () => (
    <Checkbox
      name="StylesOverridingInlineExample"
      label="Checked the mail"
      style={{
        width: '20%',
        margin: '0 auto',
        border: '2px solid #FF9800',
        backgroundColor: '#ffd699',
      }}
    />
  );
  

export const AppBarExampleIcon = () => (
    <AppBar
      title="Title"
      iconClassNameRight="muidocs-icon-navigation-expand-more"
    />
  );
  
  export  class AutoCompleteExampleSimple extends Component {
    state = {
      dataSource: [],
    };
  
    handleUpdateInput = (value) => {
      this.setState({
        dataSource: [
          value,
          value + value,
          value + value + value,
        ],
      });
    };
  
    render() {
      return (
        <div>
          <AutoComplete
            hintText="Type anything"
            dataSource={this.state.dataSource}
            onUpdateInput={this.handleUpdateInput}
          />
          <AutoComplete
            hintText="Type anything"
            dataSource={this.state.dataSource}
            onUpdateInput={this.handleUpdateInput}
            floatingLabelText="Full width"
            fullWidth={true}
          />
        </div>
      );
    }
  }

  const dataSource1 = [
    {
      text: 'text-value1',
      value: (
        <MenuItem
          primaryText="text-value1"
          secondaryText="&#9786;"
        />
      ),
    },
    {
      text: 'text-value2',
      value: (
        <MenuItem
          primaryText="text-value2"
          secondaryText="&#9786;"
        />
      ),
    },
  ];
  
  const dataSource2 = ['12345', '23456', '34567'];
  
  const dataSource3 = [
    {textKey: 'Some Text', valueKey: 'someFirstValue'},
    {textKey: 'Some Text', valueKey: 'someSecondValue'},
  ];
  const dataSourceConfig = {
    text: 'textKey',
    value: 'valueKey',
  };
  
  /**
   * The first example has `MenuItem`s in its data source that display on data entry.
   * The second example uses an array of values as its `dataSource`, and updates on focus.
   * Both examples have filtering disabled.
   */
 export const AutoCompleteExampleDataSource = () => (
    <div>
      <AutoComplete
        hintText="text-value data"
        filter={AutoComplete.noFilter}
        dataSource={dataSource1}
      /><br />
      <AutoComplete
        floatingLabelText="showAllItems"
        filter={AutoComplete.noFilter}
        openOnFocus={true}
        dataSource={dataSource2}
      /><br />
      <AutoComplete
        floatingLabelText="Same text, different values"
        filter={AutoComplete.noFilter}
        openOnFocus={true}
        dataSource={dataSource3}
        dataSourceConfig={dataSourceConfig}
      />
    </div>
  );

  const colors = [
    'Red',
    'Orange',
    'Yellow',
    'Green',
    'Blue',
    'Purple',
    'Black',
    'White',
  ];
  
  const fruit = [
    'Apple', 'Apricot', 'Avocado',
    'Banana', 'Bilberry', 'Blackberry', 'Blackcurrant', 'Blueberry',
    'Boysenberry', 'Blood Orange',
    'Cantaloupe', 'Currant', 'Cherry', 'Cherimoya', 'Cloudberry',
    'Coconut', 'Cranberry', 'Clementine',
    'Damson', 'Date', 'Dragonfruit', 'Durian',
    'Elderberry',
    'Feijoa', 'Fig',
    'Goji berry', 'Gooseberry', 'Grape', 'Grapefruit', 'Guava',
    'Honeydew', 'Huckleberry',
    'Jabouticaba', 'Jackfruit', 'Jambul', 'Jujube', 'Juniper berry',
    'Kiwi fruit', 'Kumquat',
    'Lemon', 'Lime', 'Loquat', 'Lychee',
    'Nectarine',
    'Mango', 'Marion berry', 'Melon', 'Miracle fruit', 'Mulberry', 'Mandarine',
    'Olive', 'Orange',
    'Papaya', 'Passionfruit', 'Peach', 'Pear', 'Persimmon', 'Physalis', 'Plum', 'Pineapple',
    'Pumpkin', 'Pomegranate', 'Pomelo', 'Purple Mangosteen',
    'Quince',
    'Raspberry', 'Raisin', 'Rambutan', 'Redcurrant',
    'Salal berry', 'Satsuma', 'Star fruit', 'Strawberry', 'Squash', 'Salmonberry',
    'Tamarillo', 'Tamarind', 'Tomato', 'Tangerine',
    'Ugli fruit',
    'Watermelon',
  ];
  
  /**
   * Two examples of filtering. The first uses `caseInsensitiveFilter`, the second uses `fuzzyFilter`,
   * and limits the number of results displayed using the `maxSearchResults` property.
   */
 export const AutoCompleteExampleFilters = () => (
    <div>
      <AutoComplete
        floatingLabelText="Type 'r', case insensitive"
        filter={AutoComplete.caseInsensitiveFilter}
        dataSource={colors}
      />
      <br />
      <AutoComplete
        floatingLabelText="Type 'peah', fuzzy search"
        filter={AutoComplete.fuzzyFilter}
        dataSource={fruit}
        maxSearchResults={5}
      />
    </div>
  );
  

  
  
  const style = {margin: 5};
  
  /**
   * Examples of `Avatar` using an image, [Font Icon](/#/components/font-icon), [SVG Icon](/#/components/svg-icon)
   * and "Letter" (string), with and without custom colors at the default size (`40dp`) and an alternate size (`30dp`).
   */
  export const AvatarExampleSimple = () => (
    <List>
      <ListItem
        disabled={true}
        leftAvatar={
          <Avatar src="images/uxceo-128.jpg" />
        }
      >
        Image Avatar
      </ListItem>
      <ListItem
        disabled={true}
        leftAvatar={
          <Avatar
            src="images/uxceo-128.jpg"
            size={30}
            style={style}
          />
        }
      >
        Image Avatar with custom size
      </ListItem>
      <ListItem
        disabled={true}
        leftAvatar={
          <Avatar icon={<FontIcon className="muidocs-icon-communication-voicemail" />} />
        }
      >
        FontIcon Avatar
      </ListItem>
      <ListItem
        disabled={true}
        leftAvatar={
          <Avatar
            icon={<FontIcon className="muidocs-icon-communication-voicemail" />}
            color={blue300}
            backgroundColor={indigo900}
            size={30}
            style={style}
          />
        }
      >
        FontIcon Avatar with custom colors and size
      </ListItem>
      <ListItem
        disabled={true}
        leftAvatar={
          <Avatar icon={<FileFolder />} />
        }
      >
        SvgIcon Avatar
      </ListItem>
      <ListItem
        disabled={true}
        leftAvatar={
          <Avatar
            icon={<FileFolder />}
            color={orange200}
            backgroundColor={pink400}
            size={30}
            style={style}
          />
        }
      >
        SvgIcon Avatar with custom colors and size
      </ListItem>
      <ListItem
        disabled={true}
        leftAvatar={<Avatar>A</Avatar>}
      >
        Letter Avatar
      </ListItem>
      <ListItem
        disabled={true}
        leftAvatar={
          <Avatar
            color={deepOrange300}
            backgroundColor={purple500}
            size={30}
            style={style}
          >
            A
          </Avatar>
        }
      >
        Letter Avatar with custom colors and size
      </ListItem>
    </List>
  );

  /**
 * A simple example of `BottomNavigation`, with three labels and icons
 * provided. The selected `BottomNavigationItem` is determined by application
 * state (for instance, by the URL).
 */
export class BottomNavigationExampleSimple extends Component {
    state = {
      selectedIndex: 0,
    };
  
    select = (index) => this.setState({selectedIndex: index});
  
    render() {
      return (
        <Paper zDepth={1}>
          <BottomNavigation selectedIndex={this.state.selectedIndex}>
            <BottomNavigationItem
              label="Recents"
              icon={recentsIcon}
              onTouchTap={() => this.select(0)}
            />
            <BottomNavigationItem
              label="Favorites"
              icon={favoritesIcon}
              onTouchTap={() => this.select(1)}
            />
            <BottomNavigationItem
              label="Nearby"
              icon={nearbyIcon}
              onTouchTap={() => this.select(2)}
            />
          </BottomNavigation>
        </Paper>
      );
    }
  }

 export const BadgeExampleSimple = () => (
    <div>
      <Badge
        badgeContent={4}
        primary={true}
      >
        <NotificationsIcon />
      </Badge>
      <Badge
        badgeContent={10}
        secondary={true}
        badgeStyle={{top: 12, right: 12}}
      >
        <IconButton tooltip="Notifications">
          <NotificationsIcon />
        </IconButton>
      </Badge>
    </div>
  );
  export const BadgeExampleContent = () => (
    <div>
      <Badge
        badgeContent={<IconButton tooltip="Backup"><UploadIcon /></IconButton>}
      >
        <FolderIcon />
      </Badge>
      <Badge
        badgeContent="&copy;"
        badgeStyle={{fontSize: 20}}
      >
        Company Name
      </Badge>
    </div>
  );

 export  const FlatButtonExampleSimple = () => (
    <div>
      <FlatButton label="Default" />
      <FlatButton label="Primary" primary={true} />
      <FlatButton label="Secondary" secondary={true} />
      <FlatButton label="Disabled" disabled={true} />
      <br />
      <br />
      <FlatButton label="Full width" fullWidth={true} />
    </div>
  );
  

  const styl = {
    uploadButton: {
      verticalAlign: 'middle',
    },
    uploadInput: {
      cursor: 'pointer',
      position: 'absolute',
      top: 0,
      bottom: 0,
      right: 0,
      left: 0,
      width: '100%',
      opacity: 0,
    },
  };
  
export  const FlatButtonExampleComplex = () => (
    <div>
      <FlatButton
        label="Choose an Image"
        labelPosition="before"
        style={styles.uploadButton}
        containerElement="label"
      >
        <input type="file" style={styl.uploadInput} />
      </FlatButton>
      <FlatButton
        label="Label before"
        labelPosition="before"
        primary={true}
        icon={<ActionAndroid />}
      />
      <FlatButton
        href="https://github.com/callemall/material-ui"
        target="_blank"
        label="GitHub Link"
        secondary={true}
        icon={<FontIcon className="muidocs-icon-custom-github" />}
      />
    </div>
  );

  const st = {
    margin: 12,
  };
  
 export const FlatButtonExampleIcon = () => (
    <div>
      <FlatButton
        icon={<ActionAndroid />}
        style={st}
      />
      <FlatButton
        backgroundColor="#a4c639"
        hoverColor="#8AA62F"
        icon={<ActionAndroid color={fullWhite} />}
        style={st}
      />
      <FlatButton
        href="https://github.com/callemall/material-ui"
        target="_blank"
        secondary={true}
        icon={<FontIcon className="muidocs-icon-custom-github" />}
        style={st}
      />
    </div>
  );

  const sy = {
    margin: 12,
  };
  
 export const RaisedButtonExampleSimple = () => (
    <div>
      <RaisedButton label="Default" style={sy} />
      <RaisedButton label="Primary" primary={true} style={sy} />
      <RaisedButton label="Secondary" secondary={true} style={sy} />
      <RaisedButton label="Disabled" disabled={true} style={sy} />
      <br />
      <br />
      <RaisedButton label="Full width" fullWidth={true} />
    </div>
  );

  const d = {
    margin: 12,
  };
  
 export const FF = () => (
    <div>
      <FlatButton
        icon={<ActionAndroid />}
        style={d}
      />
      <FlatButton
        backgroundColor="#a4c639"
        hoverColor="#8AA62F"
        icon={<ActionAndroid color={fullWhite} />}
        style={d}
      />
      <FlatButton
        href="https://github.com/callemall/material-ui"
        target="_blank"
        secondary={true}
        icon={<FontIcon className="muidocs-icon-custom-github" />}
        style={d}
      />
    </div>
  );
  export  class CardExampleControlled extends React.Component {
    
      constructor(props) {
        super(props);
        this.state = {
          expanded: false,
        };
      }
    
      handleExpandChange = (expanded) => {
        this.setState({expanded: expanded});
      };
    
      handleToggle = (event, toggle) => {
        this.setState({expanded: toggle});
      };
    
      handleExpand = () => {
        this.setState({expanded: true});
      };
    
      handleReduce = () => {
        this.setState({expanded: false});
      };
    
      render() {
        return (
          <Card expanded={this.state.expanded} onExpandChange={this.handleExpandChange}>
            <CardHeader
              title="URL Avatar"
              subtitle="Subtitle"
              avatar="images/ok-128.jpg"
              actAsExpander={true}
              showExpandableButton={true}
            />
            <CardText>
              <Toggle
                toggled={this.state.expanded}
                onToggle={this.handleToggle}
                labelPosition="right"
                label="This toggle controls the expanded state of the component."
              />
            </CardText>
            <CardMedia
              expandable={true}
              overlay={<CardTitle title="Overlay title" subtitle="Overlay subtitle" />}
            >
              <img src="images/nature-600-337.jpg" alt="" />
            </CardMedia>
            <CardTitle title="Card title" subtitle="Card subtitle" expandable={true} />
            <CardText expandable={true}>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Donec mattis pretium massa. Aliquam erat volutpat. Nulla facilisi.
              Donec vulputate interdum sollicitudin. Nunc lacinia auctor quam sed pellentesque.
              Aliquam dui mauris, mattis quis lacus id, pellentesque lobortis odio.
            </CardText>
            <CardActions>
              <FlatButton label="Expand" onClick={this.handleExpand} />
              <FlatButton label="Reduce" onClick={this.handleReduce} />
            </CardActions>
          </Card>
        );
      }
    }

   export const DatePickerExampleSimple = () => (
        <div>
          <DatePicker hintText="Portrait Dialog" />
          <DatePicker hintText="Landscape Dialog" mode="landscape" />
          <DatePicker hintText="Dialog Disabled" disabled={true} />
          <DatePicker hintText="Open to Year" openToYearSelection={true} />
        </div>
      );
      
     
      
      export  class DialogExampleDialogDatePicker extends React.Component {
        state = {
          open: false,
        };
      
        handleOpen = () => {
          this.setState({open: true});
        };
      
        handleClose = () => {
          this.setState({open: false});
        };
      
        render() {
          const actions = [
            <FlatButton
              label="Ok"
              primary={true}
              keyboardFocused={true}
              onClick={this.handleClose}
            />,
          ];
      
          return (
            <div>
              <RaisedButton label="Dialog With Date Picker" onClick={this.handleOpen} />
              <Dialog
                title="Dialog With Date Picker"
                actions={actions}
                modal={false}
                open={this.state.open}
                onRequestClose={this.handleClose}
              >
                Open a Date Picker dialog from within a dialog.
                <DatePicker hintText="Date Picker" />
              </Dialog>
            </div>
          );
        }
      }

      const tt = {
        marginLeft: 20,
      };
      
    export  const DividerExampleForm = () => (
        <Paper zDepth={2}>
          <TextField hintText="First name" style={tt} underlineShow={false} />
          <Divider />
          <TextField hintText="Middle name" style={tt} underlineShow={false} />
          <Divider />
          <TextField hintText="Last name" style={tt} underlineShow={false} />
          <Divider />
          <TextField hintText="Email address" style={tt} underlineShow={false} />
          <Divider />
        </Paper>
      );      
      export  class DrawerUndockedExample extends React.Component {
        
          constructor(props) {
            super(props);
            this.state = {open: false};
          }
        
          handleToggle = () => this.setState({open: !this.state.open});
        
          handleClose = () => this.setState({open: false});
        
          render() {
            return (
              <div>
                <RaisedButton
                  label="Open Drawer"
                  onClick={this.handleToggle}
                />
                <Drawer
                  docked={false}
                  width={200}
                  open={this.state.open}
                  onRequestChange={(open) => this.setState({open})}
                >
                  <MenuItem onClick={this.handleClose}>Menu Item</MenuItem>
                  <MenuItem onClick={this.handleClose}>Menu Item 2</MenuItem>
                </Drawer>
              </div>
            );
          }
        }      

const yy = {
            root: {
              display: 'flex',
              flexWrap: 'wrap',
              justifyContent: 'space-around',
            },
            gridList: {
              display: 'flex',
              flexWrap: 'nowrap',
              overflowX: 'auto',
            },
            titleStyle: {
              color: 'rgb(0, 188, 212)',
            },
          };
          
          const tilesData = [
            {
              img: 'images/grid-list/00-52-29-429_640.jpg',
              title: 'Breakfast',
              author: 'jill111',
            },
            {
              img: 'images/grid-list/burger-827309_640.jpg',
              title: 'Tasty burger',
              author: 'pashminu',
            },
            {
              img: 'images/grid-list/camera-813814_640.jpg',
              title: 'Camera',
              author: 'Danson67',
            },
            {
              img: 'images/grid-list/morning-819362_640.jpg',
              title: 'Morning',
              author: 'fancycrave1',
            },
            {
              img: 'images/grid-list/hats-829509_640.jpg',
              title: 'Hats',
              author: 'Hans',
            },
            {
              img: 'images/grid-list/honey-823614_640.jpg',
              title: 'Honey',
              author: 'fancycravel',
            },
            {
              img: 'images/grid-list/vegetables-790022_640.jpg',
              title: 'Vegetables',
              author: 'jill111',
            },
            {
              img: 'images/grid-list/water-plant-821293_640.jpg',
              title: 'Water plant',
              author: 'BkrmadtyaKarki',
            },
          ];
          
          /**
           * This example demonstrates the horizontal scrollable single-line grid list of images.
           */
       export   const GridListExampleSingleLine = () => (
            <div style={yy.root}>
              <GridList style={yy.gridList} cols={2.2}>
                {tilesData.map((tile) => (
                  <GridTile
                    key={tile.img}
                    title={tile.title}
                    actionIcon={<IconButton><StarBorder color="rgb(0, 188, 212)" /></IconButton>}
                    titleStyle={yy.titleStyle}
                    titleBackground="linear-gradient(to top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.3) 70%,rgba(0,0,0,0) 100%)"
                  >
                    <img src={tile.img} />
                  </GridTile>
                ))}
              </GridList>
            </div>
          );
          const ee = {
            height: 100,
            width: 100,
            margin: 20,
            textAlign: 'center',
            display: 'inline-block',
          };
          
        export  const PaperExampleCircle = () => (
            <div>
              <Paper style={ee} zDepth={1} circle={true} />
              <Paper style={ee} zDepth={2} circle={true} />
              <Paper style={ee} zDepth={3} circle={true} />
              <Paper style={ee} zDepth={4} circle={true} />
              <Paper style={ee} zDepth={5} circle={true} />
            </div>
          );
        export  const CircularProgressExampleSimple = () => (
            <div>
              <CircularProgress />
              <CircularProgress size={60} thickness={7} />
              <CircularProgress size={80} thickness={5} />
            </div>
          );
      export    const SliderExampleSimple = () => (
            <div>
              <Slider />
              <Slider defaultValue={0.5} />
              <Slider defaultValue={1} />
            </div>
          );

          export  class TableExampleControlled extends Component {
            state = {
              selected: [1],
            };
          
            isSelected = (index) => {
              return this.state.selected.indexOf(index) !== -1;
            };
          
            handleRowSelection = (selectedRows) => {
              this.setState({
                selected: selectedRows,
              });
            };
          
            render() {
              return (
                <Table onRowSelection={this.handleRowSelection}>
                  <TableHeader>
                    <TableRow>
                      <TableHeaderColumn>ID</TableHeaderColumn>
                      <TableHeaderColumn>Name</TableHeaderColumn>
                      <TableHeaderColumn>Status</TableHeaderColumn>
                    </TableRow>
                  </TableHeader>
                  <TableBody>
                    <TableRow selected={this.isSelected(0)}>
                      <TableRowColumn>1</TableRowColumn>
                      <TableRowColumn>John Smith</TableRowColumn>
                      <TableRowColumn>Employed</TableRowColumn>
                    </TableRow>
                    <TableRow selected={this.isSelected(1)}>
                      <TableRowColumn>2</TableRowColumn>
                      <TableRowColumn>Randal White</TableRowColumn>
                      <TableRowColumn>Unemployed</TableRowColumn>
                    </TableRow>
                    <TableRow selected={this.isSelected(2)}>
                      <TableRowColumn>3</TableRowColumn>
                      <TableRowColumn>Stephanie Sanders</TableRowColumn>
                      <TableRowColumn>Employed</TableRowColumn>
                    </TableRow>
                    <TableRow selected={this.isSelected(3)}>
                      <TableRowColumn>4</TableRowColumn>
                      <TableRowColumn>Steve Brown</TableRowColumn>
                      <TableRowColumn>Employed</TableRowColumn>
                    </TableRow>
                  </TableBody>
                </Table>
              );
            }
          }         
       export   const TabsExampleIconText = () => (
            <Tabs>
              <Tab
                icon={<FontIcon className="material-icons">phone</FontIcon>}
                label="RECENTS"
              />
              <Tab
                icon={<FontIcon className="material-icons">favorite</FontIcon>}
                label="FAVORITES"
              />
              <Tab
                icon={<MapsPersonPin />}
                label="NEARBY"
              />
            </Tabs>
          );
          